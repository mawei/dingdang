<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 文档管理 查看信息 
        <div class='panel-tools'>
            <div class='btn-group'>
            	<a class="btn " href="<?php echo base_url('adminpanel/document')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
            </div>
        </div>
    </div>
    <div class='panel-body '>
<div class="form-horizontal"  >
	<fieldset>
        <legend>基本信息</legend>
     
  	  	
	<div class="form-group">
				<label for="name" class="col-sm-2 control-label form-control-static">文档名称</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['name'])?$data_info['name']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="route" class="col-sm-2 control-label form-control-static">路径</label>
				<div class="col-sm-9 ">
					<img src='<?php echo SITE_URL;?><?php echo  isset($data_info['route'])?('doc/'.$data_info['route']):'' ?>' width="100" />
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="fee" class="col-sm-2 control-label form-control-static">费用</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['fee'])?$data_info['fee']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="create_time" class="col-sm-2 control-label form-control-static">创建时间</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['create_time'])?$data_info['create_time']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="business_id" class="col-sm-2 control-label form-control-static">所属业务</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['business_id'])?$data_info['business_id']:'' ?>
				</div>
			</div>
	    </fieldset>
	</div>
</div>
</div>
