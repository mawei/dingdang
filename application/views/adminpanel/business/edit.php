<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/business/edit')?>" >
	<div class='panel panel-default '>
		<div class='panel-heading'>
			<i class='fa fa-table'></i> 业务 修改信息
			<div class='panel-tools'>
				<div class='btn-group'>
					<a class="btn " href="<?php echo base_url('adminpanel/business')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
				</div>
			</div>
		</div>
		<div class='panel-body '>
								<fieldset>
						<legend>基本信息</legend>
													
	<div class="form-group">
				<label for="name" class="col-sm-2 control-label form-control-static">业务名称</label>
				<div class="col-sm-9 ">
					<input type="text" name="name"  id="name"  value='<?php echo isset($data_info['name'])?$data_info['name']:'' ?>'  class="form-control validate[required]"  placeholder="请输入业务名称" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="charge" class="col-sm-2 control-label form-control-static">价格</label>
				<div class="col-sm-9 ">
					<input type="number" name="charge"  id="charge"   value='<?php echo isset($data_info['charge'])?$data_info['charge']:'' ?>'   class="form-control  validate[required,custom[price]]" placeholder="请输入价格" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="categorys" class="col-sm-2 control-label form-control-static">信息分类</label>
				<div class="col-sm-9 ">
					<input type="text" name="categorys"  id="categorys"  value='<?php echo isset($data_info['categorys'])?$data_info['categorys']:'' ?>'  class="form-control validate[required]"  placeholder="请输入信息分类" >
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
		        require(['<?php echo SITE_URL?>scripts/adminpanel/business/edit.js']);
		    });
		</script>
	
	