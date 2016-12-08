<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 数据 查看信息 
        <div class='panel-tools'>
            <div class='btn-group'>
            	<a class="btn " href="<?php echo base_url('adminpanel/docdata')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
            </div>
        </div>
    </div>
    <div class='panel-body '>
<div class="form-horizontal"  >
	<fieldset>
        <legend>基本信息</legend>
     
  	  	
	<div class="form-group">
				<label for="user_id" class="col-sm-2 control-label form-control-static">用户id</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['user_id'])?$data_info['user_id']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="data" class="col-sm-2 control-label form-control-static">数据</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['data'])?$data_info['data']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="business_id" class="col-sm-2 control-label form-control-static">所属业务</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['business_id'])?$data_info['business_id']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="keyword" class="col-sm-2 control-label form-control-static">文档关键字</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['keyword'])?$data_info['keyword']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="docs" class="col-sm-2 control-label form-control-static">生成文档</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['docs'])?$data_info['docs']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="path" class="col-sm-2 control-label form-control-static">路径</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['path'])?$data_info['path']:'' ?>
				</div>
			</div>
	    </fieldset>
	</div>
</div>
</div>
