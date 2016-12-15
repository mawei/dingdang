<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config['aci_status'] = array (
  'systemVersion' => '1.2.0',
  'installED' => true,
);
$config['aci_module'] = array (
  'welcome' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2015-10-09 20:10:10',
    'moduleName' => 'welcome',
    'modulePath' => '',
    'moduleCaption' => '首页',
    'description' => '由autoCodeigniter 系统的模块',
    'fileList' => NULL,
    'works' => true,
    'moduleUrl' => '',
    'system' => true,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => '',
        'controller' => 'welcome',
        'method' => '',
        'caption' => '欢迎界面',
      ),
    ),
  ),
  'adminpanel' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2015-10-09 20:10:10',
    'moduleName' => 'user',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '后台管理中心',
    'description' => '由autoCodeigniter 系统的模块',
    'fileList' => NULL,
    'works' => true,
    'moduleUrl' => 'adminpanel/user',
    'system' => true,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'manage',
        'method' => 'index',
        'caption' => '管理中心-首页',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'manage',
        'method' => 'login',
        'caption' => '管理中心-登录',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'manage',
        'method' => 'logout',
        'caption' => '管理中心-注销',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'profile',
        'method' => 'change_pwd',
        'caption' => '管理中心-修改密码',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'manage',
        'method' => 'login',
        'caption' => '管理中心-登录',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'manage',
        'method' => 'go',
        'caption' => '管理中心-URL转向',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'manage',
        'method' => 'cache',
        'caption' => '管理中心-全局缓存',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'manage',
        'method' => 'register',
        'caption' => '管理中心-注册',
      ),
    ),
  ),
  'user' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2015-10-09 20:10:10',
    'moduleName' => 'user',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '用户 / 用户组管理',
    'description' => '由autoCodeigniter 系统的模块',
    'fileList' => NULL,
    'works' => true,
    'moduleUrl' => 'adminpanel/user',
    'system' => true,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'index',
        'caption' => '用户管理-列表',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'check_username',
        'caption' => '用户管理-检测用户名',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'delete',
        'caption' => '用户管理-删除',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'lock',
        'caption' => '用户管理-锁定',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'edit',
        'caption' => '用户管理-编辑',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'add',
        'caption' => '用户管理-新增',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'upload',
        'caption' => '用户管理-上传图像',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'role',
        'method' => 'index',
        'caption' => '用户组管理-列表',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'role',
        'method' => 'setting',
        'caption' => '用户组管理-权限设置',
      ),
      9 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'role',
        'method' => 'add',
        'caption' => '用户组管理-新增',
      ),
      10 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'role',
        'method' => 'edit',
        'caption' => '用户组管理-编辑',
      ),
      11 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'role',
        'method' => 'delete_one',
        'caption' => '用户组管理-删除',
      ),
      12 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'user_window',
        'caption' => '用户-弹窗',
      ),
      13 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'role',
        'method' => 'group_window',
        'caption' => '用户组-弹窗',
      ),
    ),
  ),
  'moduleMenu' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2015-10-09 20:10:10',
    'moduleName' => 'moduleMenu',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '菜单管理',
    'description' => '由autoCodeigniter 系统的模块',
    'fileList' => NULL,
    'works' => true,
    'moduleUrl' => 'adminpanel/moduleMenu',
    'system' => true,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleMenu',
        'method' => 'index',
        'caption' => '菜单管理-列表',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleMenu',
        'method' => 'add',
        'caption' => '菜单管理-新增',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleMenu',
        'method' => 'edit',
        'caption' => '菜单管理-编辑',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleMenu',
        'method' => 'delete',
        'caption' => '菜单管理-删除',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleMenu',
        'method' => 'set_menu',
        'caption' => '菜单管理-设置菜单',
      ),
    ),
  ),
  'moduleManage' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2015-10-09 20:10:10',
    'moduleName' => 'module',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '模块安装管理',
    'description' => '由autoCodeigniter 系统的模块',
    'fileList' => NULL,
    'works' => true,
    'moduleUrl' => 'adminpanel/moduleManage',
    'system' => true,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleManage',
        'method' => 'index',
        'caption' => '模块管理',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleInstall',
        'method' => 'index',
        'caption' => '模块管理-开始',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleInstall',
        'method' => 'check',
        'caption' => '模块管理-检查',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleInstall',
        'method' => 'setup',
        'caption' => '模块管理-安装',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleInstall',
        'method' => 'uninstall',
        'caption' => '模块管理-卸载',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleInstall',
        'method' => 'reinstall',
        'caption' => '模块管理-重新安装',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleInstall',
        'method' => 'delete',
        'caption' => '模块管理-删除',
      ),
    ),
  ),
  'helloWorld' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2015-10-09 20:10:10',
    'moduleName' => 'helloWorld',
    'modulePath' => 'adminpanel',
    'moduleCaption' => 'Hello World',
    'description' => '这里一个演示模块，来自于吸心大法第三章',
    'fileList' => NULL,
    'works' => true,
    'moduleUrl' => 'adminpanel/helloWorld',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'helloWorld',
        'method' => 'index',
        'menu_name' => NULL,
        'caption' => NULL,
      ),
    ),
  ),
  'business' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2016-11-15 13:45:27',
    'moduleName' => 'business',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '业务',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/business/edit.php',
      1 => 'scripts/adminpanel/business/edit.js',
      2 => 'application/views/adminpanel/business/readonly.php',
      3 => 'application/views/adminpanel/business/lists.php',
      4 => 'scripts/adminpanel/business/lists.js',
      5 => 'application/views/adminpanel/business/choose.php',
      6 => 'application/controllers/adminpanel/Business.php',
      7 => 'application/models/Business_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/business',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'business',
        'method' => 'index',
        'menu_name' => '管理业务',
        'caption' => '管理业务',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'business',
        'method' => 'index',
        'menu_name' => '业务列表',
        'caption' => '业务列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'business',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'business',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'business',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'business',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'business',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'business',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'business',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
      9 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'business',
        'method' => 'business_data_window',
        'menu_name' => '业务数据源',
        'caption' => '业务数据源',
      ),
    ),
  ),
  'fields' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2016-11-10 15:20:47',
    'moduleName' => 'fields',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '文档字段',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/fields/edit.php',
      1 => 'scripts/adminpanel/fields/edit.js',
      2 => 'application/views/adminpanel/fields/readonly.php',
      3 => 'application/views/adminpanel/fields/lists.php',
      4 => 'scripts/adminpanel/fields/lists.js',
      5 => 'application/views/adminpanel/fields/choose.php',
      6 => 'application/controllers/adminpanel/Fields.php',
      7 => 'application/models/Fields_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/fields',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'fields',
        'method' => 'index',
        'menu_name' => '管理文档字段',
        'caption' => '管理文档字段',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'fields',
        'method' => 'index',
        'menu_name' => '文档字段列表',
        'caption' => '文档字段列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'fields',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'fields',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'fields',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'fields',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'fields',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'fields',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'fields',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
      9 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'fields',
        'method' => 'categorys',
        'menu_name' => '获取类别',
        'caption' => '获取类别',
      ),
    ),
  ),
  'user_business' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2016-11-15 15:30:47',
    'moduleName' => 'user_business',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '用户相关业务',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/user_business/edit.php',
      1 => 'scripts/adminpanel/user_business/edit.js',
      2 => 'application/views/adminpanel/user_business/readonly.php',
      3 => 'application/views/adminpanel/user_business/lists.php',
      4 => 'scripts/adminpanel/user_business/lists.js',
      5 => 'application/views/adminpanel/user_business/choose.php',
      6 => 'application/controllers/adminpanel/User_business.php',
      7 => 'application/models/User_business_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/user_business',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user_business',
        'method' => 'index',
        'menu_name' => '管理用户相关业务',
        'caption' => '管理用户相关业务',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user_business',
        'method' => 'index',
        'menu_name' => '用户相关业务列表',
        'caption' => '用户相关业务列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user_business',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user_business',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user_business',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user_business',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user_business',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user_business',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user_business',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
    ),
  ),
  'document' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2016-11-10 15:35:25',
    'moduleName' => 'document',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '文档管理',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/document/edit.php',
      1 => 'scripts/adminpanel/document/edit.js',
      2 => 'application/views/adminpanel/document/readonly.php',
      3 => 'application/views/adminpanel/document/lists.php',
      4 => 'scripts/adminpanel/document/lists.js',
      5 => 'application/views/adminpanel/document/choose.php',
      6 => 'application/views/adminpanel/document/upload.php',
      7 => 'application/controllers/adminpanel/Document.php',
      8 => 'application/models/Document_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/document',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'document',
        'method' => 'index',
        'menu_name' => '管理文档管理',
        'caption' => '管理文档管理',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'document',
        'method' => 'index',
        'menu_name' => '文档管理列表',
        'caption' => '文档管理列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'document',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'document',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'document',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'document',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'document',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'document',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'document',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
      9 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'document',
        'method' => 'document_data_window',
        'menu_name' => '文档数据源',
        'caption' => '文档数据源',
      ),
      10 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'document',
        'method' => 'multi_doc_window',
        'menu_name' => '文档多选',
        'caption' => '文档多选',
      ),
    ),
  ),
  'docdata' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2016-11-10 15:24:45',
    'moduleName' => 'docdata',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '数据',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/docdata/edit.php',
      1 => 'scripts/adminpanel/docdata/edit.js',
      2 => 'application/views/adminpanel/docdata/readonly.php',
      3 => 'application/views/adminpanel/docdata/lists.php',
      4 => 'scripts/adminpanel/docdata/lists.js',
      5 => 'application/views/adminpanel/docdata/choose.php',
      6 => 'application/controllers/adminpanel/Docdata.php',
      7 => 'application/models/Docdata_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/docdata',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'docdata',
        'method' => 'index',
        'menu_name' => '管理数据',
        'caption' => '管理数据',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'docdata',
        'method' => 'index',
        'menu_name' => '数据列表',
        'caption' => '数据列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'docdata',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'docdata',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'docdata',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'docdata',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'docdata',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'docdata',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'docdata',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
    ),
  ),
);

/* End of file aci.php */
/* Location: ./application/config/aci.php */
