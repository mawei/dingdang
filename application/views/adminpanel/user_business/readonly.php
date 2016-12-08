<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 用户相关业务 查看信息 
        <div class='panel-tools'>
            <div class='btn-group'>
            	<a class="btn " href="<?php echo base_url('adminpanel/user_business')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
            </div>
        </div>
    </div>
    <div class='panel-body '>
<div class="form-horizontal"  >
	<fieldset>
        <legend>基本信息</legend>
     
  	  	
	<div class="form-group">
				<label for="user_id" class="col-sm-2 control-label form-control-static">用户</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['user_id'])?$data_info['user_id']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="business_id" class="col-sm-2 control-label form-control-static">业务名称</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['business_id'])?$data_info['business_id']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="create_time" class="col-sm-2 control-label form-control-static">创建时间</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['create_time'])?$data_info['create_time']:'' ?>
				</div>
			</div>
	    </fieldset>
	</div>
</div>
</div>
