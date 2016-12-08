<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 文档字段 查看信息 
        <div class='panel-tools'>
            <div class='btn-group'>
            	<a class="btn " href="<?php echo base_url('adminpanel/fields')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
            </div>
        </div>
    </div>
    <div class='panel-body '>
<div class="form-horizontal"  >
	<fieldset>
        <legend>基本信息</legend>
     
  	  	
	<div class="form-group">
				<label for="category" class="col-sm-2 control-label form-control-static">信息类别</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['category'])?$data_info['category']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="field_name" class="col-sm-2 control-label form-control-static">字段名称</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['field_name'])?$data_info['field_name']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="field_alias" class="col-sm-2 control-label form-control-static">字段别称</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['field_alias'])?$data_info['field_alias']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="business_id" class="col-sm-2 control-label form-control-static">所属业务</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['business_id'])?$data_info['business_id']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="type" class="col-sm-2 control-label form-control-static">字段类型</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['type'])?$data_info['type']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="is_must" class="col-sm-2 control-label form-control-static">是否必须</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['is_must'])?$data_info['is_must']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="message" class="col-sm-2 control-label form-control-static">提示信息</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['message'])?$data_info['message']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="field_values" class="col-sm-2 control-label form-control-static">值</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['field_values'])?$data_info['field_values']:'' ?>
				</div>
			</div>
	    </fieldset>
	</div>
</div>
</div>
