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
 * 项目名称：用户相关业务 MODEL
 * 版本号：1 
 * 最后生成时间：2016-11-15 15:30:47 
 */
class User_business_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'user_business';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'user_business_id'=>0,
		'user_id'=>'',
		'business_id'=>'',
		'create_time'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_user_business`
(
`user_id` varchar(250) DEFAULT NULL COMMENT '用户',
`business_id` varchar(50) DEFAULT NULL COMMENT '业务名称',
`create_time` varchar(50) DEFAULT NULL COMMENT '创建时间',
`user_business_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`user_business_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        }

// END user_business_model class

/* End of file user_business_model.php */
/* Location: ./user_business_model.php */
?>