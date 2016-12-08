<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 业务 查看信息 
        <div class='panel-tools'>
            <div class='btn-group'>
            	<a class="btn " href="<?php echo base_url('adminpanel/business')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
            </div>
        </div>
    </div>
    <div class='panel-body '>
<div class="form-horizontal"  >
	<fieldset>
        <legend>基本信息</legend>
     
  	  	
	<div class="form-group">
				<label for="name" class="col-sm-2 control-label form-control-static">业务名称</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['name'])?$data_info['name']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="charge" class="col-sm-2 control-label form-control-static">价格</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['charge'])?$data_info['charge']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="categorys" class="col-sm-2 control-label form-control-static">信息分类</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['categorys'])?$data_info['categorys']:'' ?>
				</div>
			</div>
	    </fieldset>
	</div>
</div>
</div>
