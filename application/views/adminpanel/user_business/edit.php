<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/user_business/edit')?>" >
	<div class='panel panel-default '>
		<div class='panel-heading'>
			<i class='fa fa-table'></i> 用户相关业务 修改信息
			<div class='panel-tools'>
				<div class='btn-group'>
					<a class="btn " href="<?php echo base_url('adminpanel/user_business')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
				</div>
			</div>
		</div>
		<div class='panel-body '>
								<fieldset>
						<legend>基本信息</legend>
													
	<div class="form-group">
				<label for="user_id" class="col-sm-2 control-label form-control-static">用户</label>
				<div class="col-sm-9 ">
					<input type="text" name="user_id"  id="user_id"  value='<?php echo isset($data_info['user_id'])?$data_info['user_id']:'' ?>'  class="form-control validate[required]"  placeholder="请输入用户" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="business_id" class="col-sm-2 control-label form-control-static">业务名称</label>
				<div class="col-md-5 ">
					<input class="form-control" value="<?php echo isset($data_info['business_id_text'])?$data_info['business_id_text']:''; ?>" readonly="readonly" placeholder="请点击选择" type="text" id="business_id_text"  /><input type="hidden" value="<?php echo isset($data_info['business_id'])?$data_info['business_id']:'';?>" id="business_id" name="business_id" />
				</div>
			</div>
																								</fieldset>
							<div class='form-actions'>
				<button class='btn btn-primary ' type='submit' id="dosubmit">保存</button>
			</div>
</form>
			<script language="javascript" type="text/javascript">
			var is_edit =<?php echo ($is_edit)?"true":"false" ?>;
			var id =<?php echo $id;?>;

			require(['<?php echo SITE_URL?>scripts/common.js'], function (common) {
		        require(['<?php echo SITE_URL?>scripts/adminpanel/user_business/edit.js']);
		    });
		</script>
	
	