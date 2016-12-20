<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'vendor/autoload.php';

/**
 * AutoCodeIgniter.com
 *
 * 基于CodeIgniter核心模块自动生成程序
 *
 * 源项目      AutoCodeIgniter
 * 作者：      AutoCodeIgniter.com Dev Team EMAIL:hubinjie@outlook.com QQ:5516448
 * 版权：      Copyright (c) 2015 , AutoCodeIgniter com.
 * 项目名称：数据 
 * 版本号：1 
 * 最后生成时间：2016-11-10 15:24:45 
 */
class Docdata extends Admin_Controller {
    
    var $method_config;
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('Business_model','Document_model','docdata_model'));
        $this->load->helper(array('auto_codeIgniter_helper','array'));
        $this->load->library('zip');
  
        //保证排序安全性
        $this->method_config['sort_field'] = array(
                                        'business_id'=>'business_id',
                                        'keyword'=>'keyword',
                                        );
    }
    
    /**
     * 默认首页列表
     * @param int $pageno 当前页码
     * @return void
     */
    function index($page_no=0,$sort_id=0)
    {

        $page_no = max(intval($page_no),1);
        $user_id = $this->session->userdata('user_id');

        
        $orderby = "docdata_id desc";
        $dir = $order=  NULL;
        $order=isset($_GET['order'])?safe_replace(trim($_GET['order'])):'';
        $dir=isset($_GET['dir'])?safe_replace(trim($_GET['dir'])):'asc';
        
        if(trim($order)!="")
        {
            //如果找到得
            if(isset($this->method_config['sort_field'][strtolower($order)]))
            {
                if(strtolower($dir)=="asc")
                    $orderby = $this->method_config['sort_field'][strtolower($order)]." asc," .$orderby;
                 else
                    $orderby = $this->method_config['sort_field'][strtolower($order)]." desc," .$orderby;
            }
        }
                
        $where ="";


        $_arr = NULL;//从URL GET
        $where_arr = NULL;
        if (isset($_GET['dosubmit'])) {
            $_arr['keyword'] =isset($_GET['keyword'])?safe_replace(trim($_GET['keyword'])):'';
            if($_arr['keyword']!="") $where_arr[] = "concat(keyword) like '%{$_arr['keyword']}%'";
            
            if($where_arr)$where = implode(" and ",$where_arr);
            if($user_id != 1)
            {
                 $where .= "and user_id = '{$user_id}'";  
            }
        }

        if($user_id != 1)
        {
            $where .= "user_id = '{$user_id}'";
        }


            $data_list = $this->docdata_model->listinfo($where,'*',$orderby , $page_no, $this->docdata_model->page_size,'',$this->docdata_model->page_size,page_list_url('adminpanel/docdata/index',true));
        if($data_list)
        {
                foreach($data_list as $k=>$v)
                {
                    $data_list[$k] = $this->_process_datacorce_value($v);
                }
        }
        $this->view('lists',array('require_js'=>true,'data_info'=>$_arr,'order'=>$order,'dir'=>$dir,'data_list'=>$data_list,'pages'=>$this->docdata_model->pages));
    }
    
    /**
     * 处理数据源结
     * @param array v 
     * @return array
     */
    function _process_datacorce_value($v,$is_edit_model=false)
    {
            if(isset($v['business_id']))
            {
                //如果编辑模式
                if($is_edit_model)
                    $v['business_id_text'] = $this->Business_model->business_data_value($v["business_id"]);                    
                else
                    $v['business_id'] = $this->Business_model->business_data_value($v["business_id"]);                    
             }
                    
            if(isset($v['docs']))
            {
                //如果编辑模式
                if($is_edit_model)
                    $v['docs_text'] = $this->Document_model->multi_doc_value($v["docs"]);                    
                else
                    $v['docs'] = $this->Document_model->multi_doc_value($v["docs"]);                    
             }
                    
         return $v;
    }
     /**
     * 新增数据
     * @param AJAX POST 
     * @return void
     */
    function add($id)
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();

        //如果是AJAX请求
        if($this->input->is_ajax_request())
        {
            $i = 0;
            //$doc_ids = implode(",", $_POST['docs']) ;
            //unset($_POST['docs']);
            $documents = $this->db->query("select * from t_aci_document where business_id=$id")->result_array();
            $business = $this->db->query("select * from t_aci_business where business_id={$id}")->result_array(); 
            $_arr = array();
            foreach ($documents as $doc_value) {
                $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(UPLOAD_PATH.'doc/'.$doc_value['route']); 
                foreach ($_POST as $post_key => $post_value) {
                    if($i == 0)
                    {
                        $_arr['keyword'] = $post_value;
                    }
                    if(is_array($post_value))
                    {
                        for ($x=1;$x<20;$x++)
                        {
                            $templateProcessor->setValue($post_key.$x, isset($post_value[$x-1])?$post_value[$x-1]:"");   
                        }
                    }else{
                        $templateProcessor->setValue($post_key, $post_value);  
                    }

                    $i++;
                } 
                $path_dir = 'uploadfile/output/'.$business[0]['name'].'('.$_arr['keyword'].')';
                if(!is_dir($path_dir)) mkdir($path_dir,0777);
                $path = $path_dir.'/'.iconv("utf-8","GBK",$doc_value['name']).'.docx';
                $templateProcessor->saveAs($path);
            }
            //$path_dir  = iconv("utf-8","gb2312//IGNORE",$path_dir );
            $this->zip->read_dir($path_dir,false);
            $this->zip->archive($path_dir.'.zip');

            $_arr['path'] = 'uploadfile/output/'.$business[0]['name'].'('.$_arr['keyword'].').zip';
            $_arr['user_id'] = $this->session->userdata('user_id');
            //接收POST参数
            $_arr['business_id'] = $id;
            //$_arr['docs'] = $doc_ids;
            $_arr['data'] = json_encode($_POST);
            $new_id = $this->docdata_model->insert($_arr);
            if($new_id)
            {
                exit(json_encode(array('status'=>true,'tips'=>'信息新增成功','new_id'=>$new_id)));
            }else
            {
                exit(json_encode(array('status'=>false,'tips'=>'信息新增失败','new_id'=>0)));
            }
        }else
        {
            $fields = $this->db->query("select * from t_aci_fields where business_id={$id}")->result_array();
            $categorys = $this->db->query("select categorys from t_aci_business where business_id={$id}")->result_array()[0]['categorys'];
            $categorys = explode("|", $categorys);
            $new_fields = array();
            foreach ($categorys as $key => $value) {
                $new_fields[$value] = array();
            }
            foreach($fields as $f)
            {
                if(in_array($f['category'], $categorys)) array_push($new_fields[$f['category']],$f);
            }
            
            // $docs = $this->db->query("select document_id,name from t_aci_document where business_id={$id}")->result_array();
            // $data_info['fields']['docs'] = $docs;
            $data_info['fields'] = $new_fields;
            $this->view('edit',array('require_js'=>true,'is_edit'=>false,'id'=>$id,'data_info'=>$data_info));
        }
    }
    
     /**
     * 删除单个数据
     * @param int id 
     * @return void
     */
    function delete_one($id=0)
    {
        $id = intval($id);
        $data_info =$this->docdata_model->get_one(array('docdata_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
        $status = $this->docdata_model->delete(array('docdata_id'=>$id));
        if($status)
        {
            $this->showmessage('删除成功');
        }else
            $this->showmessage('删除失败');
    }

    /**
     * 删除选中数据
     * @param post pid 
     * @return void
     */
    function delete_all()
    {
        if(isset($_POST))
        {
            $pidarr = isset($_POST['pid']) ? $_POST['pid'] : $this->showmessage('无效参数', HTTP_REFERER);
            $where = $this->docdata_model->to_sqls($pidarr, '', 'docdata_id');
            $status = $this->docdata_model->delete($where);
            if($status)
            {
                $this->showmessage('操作成功', HTTP_REFERER);
            }else 
            {
                $this->showmessage('操作失败');
            }
        }
    }
     /**
     * 修改数据
     * @param int id 
     * @return void
     */
    function edit($id=0)
    {
        $id = intval($id);
        
        $data =$this->docdata_model->get_one(array('docdata_id'=>$id));
        $values = json_decode($data['data'],true);
        $business_id = $data['business_id'];
        $business = $this->db->query("select * from t_aci_business where business_id={$business_id}")->result_array(); 
        $data_info['fields'] = array();
        $fields = $this->db->query("select field_name,field_alias,category,type,field_values from t_aci_fields where business_id={$business_id}")->result_array();

        $data_info['fields'] = $fields;
        $j = count($data_info['fields']);
        // foreach ($data_info['fields'] as $key => $value) {
        //     //$data_info['fields'][$key]["value"] = isset($values[$value["field_name"]])? $values[$value["field_name"]]:'';
        //     $i = 2;
        //     while (isset( $values[$value["field_name"].$i])) {
        //         $data_info['fields'][$j]["value"] = $values[$value["field_name"].$i];
        //         $i++;
        //         $j++;
        //     }
        //     $data_info['fields'][$key]["value"] = $values[$value["field_name"]];
        // }
        foreach ($data_info['fields'] as $key => $value) {
            $data_i['fields'][$value['field_name']] = $value;


        }
        unset($values[0]);
        foreach ($values as $key => $value) {
            $data_i['fields'][$key]['value'] = $value;

            $i = 2;
            while (isset( $values[$key.$i])) {
                $data_i['fields'][$key.$i] = $data_i['fields'][$key];
                $data_i['fields'][$key.$i]['value'] = $value;
                $data_i['fields'][$key.$i]['category'] = $data_i['fields'][$key.$i]['category'].$i;
                $i++;
            }
        }

        $data_info['fields'] = $data_i['fields'];


        $categorys = $this->db->query("select categorys from t_aci_business where business_id={$business_id}")->result_array()[0]['categorys'];
        $categorys = explode("|", $categorys);
        $new_fields = array();
        foreach ($categorys as $key => $value) {
            $new_fields[$value] = array();
        }
        //print_r($data_info);die();
        foreach($data_info['fields'] as $f)
        {

            if(!in_array($f['category'], array_keys($new_fields)) && in_array(preg_replace('|[0-9a-zA-Z/]+|', '', $f['category']),$categorys))
            {

                $offset = array_search(preg_replace('|[0-9a-zA-Z/]+|', '', $f['category']), array_keys($new_fields)) + 
                $this->countArray(array_keys($new_fields),preg_replace('|[0-9a-zA-Z/]+|', '', $f['category'])) ;
                $new_fields = array_merge(array_slice($new_fields, 0, $offset), array($f['category']=>array()), array_slice($new_fields, $offset));
                $i++;
            }

            if(in_array($f['category'], array_keys($new_fields)) )
            {
                array_push($new_fields[$f['category']],$f);
            }
        }
        //print_r($new_fields);die();

        $data_info['fields'] = $new_fields;
        $id = $data['docdata_id'];
        $data_info["fields"]["docs"] = $data['docs'];
        // $documents = $this->db->query("select * from `t_aci_document` where document_id in ({$data['docs']})")->result_array();
        // $data_info["fields"]["docs"] = $documents;
        //如果是AJAX请求
        if($this->input->is_ajax_request())
        {
            $i = 0;
            // $doc_ids = implode(",", $_POST['docs']) ;
            // unset($_POST['docs']);
            $documents = $this->db->query("select * from t_aci_document where business_id={$business_id}")->result_array(); 
            $_arr = array();
            foreach ($documents as $doc_value) {
                $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(UPLOAD_PATH.'doc/'.$doc_value['route']); 
                foreach ($_POST as $post_key => $post_value) {
                    if($i == 0)
                    {
                        $_arr['keyword'] = $post_value;
                    }
                    if(is_array($post_value))
                    {
                        for ($x=1;$x<20;$x++)
                        {
                            $templateProcessor->setValue($post_key.$x, isset($post_value[$x-1])?$post_value[$x-1]:"");   
                        }
                    }else{
                        $templateProcessor->setValue($post_key, $post_value);  
                    }                    
                    $i++;
                } 
                $path_dir = 'uploadfile/output/'.$business[0]['name'].'('.$_arr['keyword'].')';
                if(!is_dir($path_dir)) mkdir($path_dir,0777);
                $path = $path_dir.'/'.$doc_value['name'].'.docx';
                $templateProcessor->saveAs($path);
            }
            $path_dir  = iconv("utf-8","gb2312",$path_dir );
            $this->zip->read_dir($path_dir,false);
            $this->zip->archive($path_dir.'.zip');
            $_arr['path'] = 'uploadfile/output/'.$business[0]['name'].'('.$_arr['keyword'].').zip';

            $_arr['user_id'] = $this->session->userdata('user_id');
            //接收POST参数
            $_arr['business_id'] = $business_id;
            //$_arr['docs'] = $doc_ids;
            $_arr['data'] = json_encode($_POST);
            $status = $this->docdata_model->update($_arr,array('docdata_id'=>$id));
            if($status)
            {
                exit(json_encode(array('status'=>true,'tips'=>'信息修改成功')));
            }else
            {
                exit(json_encode(array('status'=>false,'tips'=>'信息修改失败')));
            }
        }else
        {
            if(!$data_info)$this->showmessage('信息不存在');
            $data_info = $this->_process_datacorce_value($data_info,true);
            $this->view('edit',array('require_js'=>true,'data_info'=>$data_info,'is_edit'=>true,'id'=>$id));
        }
    }

    private function countArray($array,$key)
    {
        $count = 0;
        $a = array_count_values($array);
        foreach ($a as $k => $value) {
            if(preg_replace('|[0-9a-zA-Z/]+|', '', $k) == $key)
            {
                $count += $value;
            }
        }
        return $count;
    }
 
  
     /**
     * 只读查看数据
     * @param int id 
     * @return void
     */
    function readonly($id=0)
    {
        $id = intval($id);
        
        $data =$this->docdata_model->get_one(array('docdata_id'=>$id));
        $values = json_decode($data['data'],true);
        $business_id = $data['business_id'];
        $data_info['fields'] = array();
        $fields = $this->db->query("select field_name,field_alias from t_aci_fields where business_id={$business_id}")->result_array();
        $data_info['fields'] = $fields;

        foreach ($data_info['fields'] as $key => $value) {
            $data_info['fields'][$key]["value"] =  isset($values[$value["field_name"]])?$values[$value["field_name"]]:"";
        }

        $id = $data['docdata_id'];
        $data_info["fields"]["docs"] = $data['docs'];

        $documents = $this->db->query("select * from `t_aci_document` where document_id in ({$data['docs']})")->result_array();
        $data_info["fields"]["docs"] = $documents;

        if(!$data_info)$this->showmessage('信息不存在');
        $data_info = $this->_process_datacorce_value($data_info);
        
        $this->view('readonly',array('require_js'=>true,'data_info'=>$data_info));
    }

}

// END docdata class

/* End of file docdata.php */
/* Location: ./docdata.php */
?>