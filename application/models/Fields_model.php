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
 * 项目名称：文档字段 MODEL
 * 版本号：1 
 * 最后生成时间：2016-11-10 15:16:38 
 */
class Fields_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'fields';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'fields_id'=>0,
		'category'=>'',
		'field_name'=>'',
		'field_alias'=>'',
		'business_id'=>'',
		'type'=>'',
		'is_must'=>'',
		'message'=>'',
		'field_values'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_fields`
(
`category` varchar(250) DEFAULT NULL COMMENT '信息类别',
`field_name` varchar(250) DEFAULT NULL COMMENT '字段名称',
`field_alias` varchar(250) DEFAULT NULL COMMENT '字段别称',
`business_id` varchar(50) DEFAULT NULL COMMENT '所属业务',
`type` varchar(250) DEFAULT NULL COMMENT '字段类型',
`is_must` char(2) DEFAULT NULL COMMENT '是否必须',
`message` varchar(250) DEFAULT NULL COMMENT '提示信息',
`field_values` text COMMENT '值',
`fields_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`fields_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        }

// END fields_model class

/* End of file fields_model.php */
/* Location: ./fields_model.php */
?>