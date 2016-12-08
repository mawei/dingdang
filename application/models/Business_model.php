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
 * 项目名称：业务 MODEL
 * 版本号：1 
 * 最后生成时间：2016-11-15 13:45:27 
 */
class Business_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'business';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'business_id'=>0,
		'name'=>'',
		'charge'=>'',
		'categorys'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_business`
(
`name` varchar(250) DEFAULT NULL COMMENT '业务名称',
`charge` decimal(10,2) DEFAULT '0.00' COMMENT '价格',
`categorys` varchar(250) DEFAULT NULL COMMENT '信息分类',
`business_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`business_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        
    /**
     * 业务数据源     * @return array
     */
    function business_data_datasource($where='',$limit = '', $order = '', $group = '', $key='')
    {
    	$datalist = $this->select($where,'business_id,name',$limit,$order,$group,$key);
        return $datalist;
    }
    
    /**
     * 业务数据源选择中项值     * @return array
     */
    function business_data_value($id=0)
    {
    	$data_info = $this->get_one(array('business_id'=>$id),'name');
        if($data_info)
        {
        	return  implode("-",$data_info);
        }
        return NULL;
    }
        }

// END business_model class

/* End of file business_model.php */
/* Location: ./business_model.php */
?>