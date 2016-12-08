<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * AutoCodeIgniter.com
 *
 * 基于CodeIgniter核心模块自动生成程序
 *
 * 源项目		AutoCodeIgniter
 * 作者：		AutoCodeIgniter.com Dev Team
 * 版权：		Copyright (c) 2015 , AutoCodeIgniter com.
 * 项目名称：文档管理 MODEL
 * 版本号：1 
 * 最后生成时间：2016-11-10 15:12:06 
 */
class Document_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'document';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'document_id'=>0,
		'name'=>'',
		'route'=>'',
		'fee'=>'',
		'create_time'=>'',
		'business_id'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_document`
(
`name` varchar(250) DEFAULT NULL COMMENT '文档名称',
`route` varchar(250) DEFAULT NULL COMMENT '路径',
`fee` int(11) DEFAULT '0' COMMENT '费用',
`create_time` varchar(50) DEFAULT NULL COMMENT '创建时间',
`business_id` varchar(50) DEFAULT NULL COMMENT '所属业务',
`document_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`document_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        
    /**
     * 文档数据源     * @return array
     */
    function document_data_datasource($where='',$limit = '', $order = '', $group = '', $key='')
    {
    	$datalist = $this->select($where,'document_id,name',$limit,$order,$group,$key);
        return $datalist;
    }
    
    /**
     * 文档数据源选择中项值     * @return array
     */
    function document_data_value($id=0)
    {
    	$data_info = $this->get_one(array('document_id'=>$id),'name');
        if($data_info)
        {
        	return  implode("-",$data_info);
        }
        return NULL;
    }
        
    /**
     * 文档多选     * @return array
     */
    function multi_doc_datasource($where='',$limit = '', $order = '', $group = '', $key='')
    {
    	$datalist = $this->select($where,'document_id,name',$limit,$order,$group,$key);
        return $datalist;
    }
    
    /**
     * 文档多选选择中项值     * @return array
     */
    function multi_doc_value($id=0)
    {
    	$data_info = $this->get_one(array('document_id'=>$id),'name');
        if($data_info)
        {
        	return  implode("-",$data_info);
        }
        return NULL;
    }
        }

// END document_model class

/* End of file document_model.php */
/* Location: ./document_model.php */
?>