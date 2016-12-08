<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * AutoCodeIgniter.com
 *
 * 基于CodeIgniter核心模块自动生成程序
 *
 * 源项目		AutoCodeIgniter
 * 作者：		AutoCodeIgniter.com Dev Team EMAIL:hubinjie@outlook.com QQ:5516448
 * 版权：		Copyright (c) 2015 , AutoCodeIgniter com.
 * 项目名称：文档字段 
 * 版本号：1 
 * 最后生成时间：2016-11-10 15:16:38 
 */
class Fields extends Admin_Controller {
	
    var $method_config;
    function __construct()
	{
		parent::__construct();
		$this->load->model(array('Business_model','fields_model'));
        $this->load->helper(array('auto_codeIgniter_helper','array'));
  
  
        //保证排序安全性
        $this->method_config['sort_field'] = array(
										'field_name'=>'field_name',
										'field_alias'=>'field_alias',
										'business_id'=>'business_id',
										'field_values'=>'field_values',
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
        
        $orderby = "fields_id desc";
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
        if (isset($_GET['dosubmit'])) {
        	$where_arr = NULL;
			$_arr['keyword'] =isset($_GET['keyword'])?safe_replace(trim($_GET['keyword'])):'';
			if($_arr['keyword']!="") $where_arr[] = "concat(field_name,field_alias,field_values) like '%{$_arr['keyword']}%'";
                
		        
        
		        
        	if($where_arr)$where = implode(" and ",$where_arr);
        }

        	$data_list = $this->fields_model->listinfo($where,'*',$orderby , $page_no, $this->fields_model->page_size,'',$this->fields_model->page_size,page_list_url('adminpanel/fields/index',true));
        if($data_list)
        {
            	foreach($data_list as $k=>$v)
            	{
					$data_list[$k] = $this->_process_datacorce_value($v);
            	}
        }
    	$this->view('lists',array('require_js'=>true,'data_info'=>$_arr,'order'=>$order,'dir'=>$dir,'data_list'=>$data_list,'pages'=>$this->fields_model->pages));
    }
    
    function categorys($business_id)
    {
        $categorys = $this->db->query("select categorys from `t_aci_business` where business_id={$business_id}")->result_array()[0]['categorys'];
        $c = explode("|", $categorys);
        exit(json_encode(array('status'=>true,'tips'=>'信息获取成功','categorys'=>$c)));

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
                    
         return $v;
    }
     /**
     * 新增数据
     * @param AJAX POST 
     * @return void
     */
    function add()
    {
    	//如果是AJAX请求
    	if($this->input->is_ajax_request())
		{
        	//接收POST参数
			$_arr['category'] = isset($_POST["category"])?trim(safe_replace($_POST["category"])):'';
			$_arr['field_name'] = isset($_POST["field_name"])?trim(safe_replace($_POST["field_name"])):exit(json_encode(array('status'=>false,'tips'=>'字段名称必填')));
			if($_arr['field_name']=='')exit(json_encode(array('status'=>false,'tips'=>'字段名称必填')));
			$_arr['field_alias'] = isset($_POST["field_alias"])?trim(safe_replace($_POST["field_alias"])):exit(json_encode(array('status'=>false,'tips'=>'字段别称必填')));
			if($_arr['field_alias']=='')exit(json_encode(array('status'=>false,'tips'=>'字段别称必填')));
			$_arr['business_id'] = isset($_POST["business_id"])?trim(safe_replace($_POST["business_id"])):exit(json_encode(array('status'=>false,'tips'=>'所属业务必填')));
			if($_arr['business_id']=='')exit(json_encode(array('status'=>false,'tips'=>'所属业务必填')));
			$_arr['type'] = isset($_POST["type"])?trim(safe_replace($_POST["type"])):'';
			$_arr['is_must'] = isset($_POST["is_must"])?trim(safe_replace($_POST["is_must"])):'';
			$_arr['message'] = isset($_POST["message"])?trim(safe_replace($_POST["message"])):'';
			$_arr['field_values'] = isset($_POST["field_values"])?trim(safe_replace($_POST["field_values"])):exit(json_encode(array('status'=>false,'tips'=>'值必填')));
			if($_arr['field_values']=='')exit(json_encode(array('status'=>false,'tips'=>'值必填')));
			
            $new_id = $this->fields_model->insert($_arr);
            if($new_id)
            {
				exit(json_encode(array('status'=>true,'tips'=>'信息新增成功','new_id'=>$new_id)));
            }else
            {
            	exit(json_encode(array('status'=>false,'tips'=>'信息新增失败','new_id'=>0)));
            }
        }else
        {
        	$this->view('edit',array('require_js'=>true,'is_edit'=>false,'id'=>0,'data_info'=>$this->fields_model->default_info()));
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
        $data_info =$this->fields_model->get_one(array('fields_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
        $status = $this->fields_model->delete(array('fields_id'=>$id));
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
			$where = $this->fields_model->to_sqls($pidarr, '', 'fields_id');
			$status = $this->fields_model->delete($where);
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
        
        $data_info =$this->fields_model->get_one(array('fields_id'=>$id));
    	//如果是AJAX请求
    	if($this->input->is_ajax_request())
		{
        	if(!$data_info)exit(json_encode(array('status'=>false,'tips'=>'信息不存在')));
        	//接收POST参数
			$_arr['category'] = isset($_POST["category"])?trim(safe_replace($_POST["category"])):'';
			$_arr['field_name'] = isset($_POST["field_name"])?trim(safe_replace($_POST["field_name"])):exit(json_encode(array('status'=>false,'tips'=>'字段名称必填')));
			if($_arr['field_name']=='')exit(json_encode(array('status'=>false,'tips'=>'字段名称必填')));
			$_arr['field_alias'] = isset($_POST["field_alias"])?trim(safe_replace($_POST["field_alias"])):exit(json_encode(array('status'=>false,'tips'=>'字段别称必填')));
			if($_arr['field_alias']=='')exit(json_encode(array('status'=>false,'tips'=>'字段别称必填')));
			$_arr['business_id'] = isset($_POST["business_id"])?trim(safe_replace($_POST["business_id"])):exit(json_encode(array('status'=>false,'tips'=>'所属业务必填')));
			if($_arr['business_id']=='')exit(json_encode(array('status'=>false,'tips'=>'所属业务必填')));
			$_arr['type'] = isset($_POST["type"])?trim(safe_replace($_POST["type"])):'';
			$_arr['is_must'] = isset($_POST["is_must"])?trim(safe_replace($_POST["is_must"])):'';
			$_arr['message'] = isset($_POST["message"])?trim(safe_replace($_POST["message"])):'';
			$_arr['field_values'] = isset($_POST["field_values"])?trim(safe_replace($_POST["field_values"])):exit(json_encode(array('status'=>false,'tips'=>'值必填')));
			if($_arr['field_values']=='')exit(json_encode(array('status'=>false,'tips'=>'值必填')));
			
            $status = $this->fields_model->update($_arr,array('fields_id'=>$id));
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
 
  
     /**
     * 只读查看数据
     * @param int id 
     * @return void
     */
    function readonly($id=0)
    {
    	$id = intval($id);
        $data_info =$this->fields_model->get_one(array('fields_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
		$data_info = $this->_process_datacorce_value($data_info);
        
        $this->view('readonly',array('require_js'=>true,'data_info'=>$data_info));
    }

}

// END fields class

/* End of file fields.php */
/* Location: ./fields.php */
?>