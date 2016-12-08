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
 * 项目名称：数据 MODEL
 * 版本号：1 
 * 最后生成时间：2016-11-10 15:24:45 
 */
class Docdata_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'docdata';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'docdata_id'=>0,
		'user_id'=>'',
		'data'=>'',
		'business_id'=>'',
		'keyword'=>'',
		'docs'=>'',
		'path'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_docdata`
(
`user_id` varchar(250) DEFAULT NULL COMMENT '用户id',
`data` text COMMENT '数据',
`business_id` varchar(50) DEFAULT NULL COMMENT '所属业务',
`keyword` varchar(250) DEFAULT NULL COMMENT '文档关键字',
`docs` varchar(50) DEFAULT NULL COMMENT '生成文档',
`path` varchar(250) DEFAULT NULL COMMENT '路径',
`docdata_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`docdata_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        }

// END docdata_model class

/* End of file docdata_model.php */
/* Location: ./docdata_model.php */
?>