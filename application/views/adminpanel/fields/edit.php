<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/fields/edit')?>" >
	<div class='panel panel-default '>
		<div class='panel-heading'>
			<i class='fa fa-table'></i> 文档字段 修改信息
			<div class='panel-tools'>
				<div class='btn-group'>
					<a class="btn " href="<?php echo base_url('adminpanel/fields')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
				</div>
			</div>
		</div>
		<div class='panel-body '>
								<fieldset>
						<legend>基本信息</legend>
													

													
	<div class="form-group">
				<label for="field_name" class="col-sm-2 control-label form-control-static">字段名称</label>
				<div class="col-sm-9 ">
					<input type="text" name="field_name"  id="field_name"  value='<?php echo isset($data_info['field_name'])?$data_info['field_name']:'' ?>'  class="form-control validate[required]"  placeholder="请输入字段名称" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="field_alias" class="col-sm-2 control-label form-control-static">字段别称</label>
				<div class="col-sm-9 ">
					<input type="text" name="field_alias"  id="field_alias"  value='<?php echo isset($data_info['field_alias'])?$data_info['field_alias']:'' ?>'  class="form-control validate[required]"  placeholder="请输入字段别称" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="business_id" class="col-sm-2 control-label form-control-static">所属业务</label>
				<div class="col-md-5 ">
					<input class="form-control" value="<?php echo isset($data_info['business_id_text'])?$data_info['business_id_text']:''; ?>" readonly="readonly" placeholder="请点击选择" type="text" id="business_id_text"  /><input type="hidden" value="<?php echo isset($data_info['business_id'])?$data_info['business_id']:'';?>" id="business_id" name="business_id" />
				</div>
			</div>

				<div class="form-group">
				<label for="category" class="col-sm-2 control-label form-control-static">信息类别</label>
				<div class="col-sm-9 ">
					<select name="category"  id="category"  value='<?php echo isset($data_info['category'])?$data_info['category']:'' ?>'  class="form-control validate[required]"></select>
				</div>
			</div>
													
	<div class="form-group">
				<label for="type" class="col-sm-2 control-label form-control-static">字段类型</label>
				<div class="col-sm-9 ">
					<input type="text" name="type"  id="type"  value='<?php echo isset($data_info['type'])?$data_info['type']:'' ?>'  class="form-control validate[required]"  placeholder="请输入字段类型" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="is_must" class="col-sm-2 control-label form-control-static">是否必须</label>
				<div class="col-sm-9 ">
					<label class="radio-inline">  <input type="radio" class="" name="is_must"  id="is_must1" value="是" <?php if(isset($data_info['is_must'])&&(trim($data_info['is_must'])=='是')) { ?> checked="checked" <?php } ?>            > 是</label><label class="radio-inline">  <input type="radio"  class="" name="is_must"  id="is_must2" value="否"<?php if(isset($data_info['is_must'])&&(trim($data_info['is_must'])=='否')) { ?> checked="checked" <?php } ?>            > 否</label>
				</div>
			</div>
													
	<div class="form-group">
				<label for="message" class="col-sm-2 control-label form-control-static">提示信息</label>
				<div class="col-sm-9 ">
					<input type="text" name="message"  id="message"  value='<?php echo isset($data_info['message'])?$data_info['message']:'' ?>'  class="form-control validate[required]"  placeholder="请输入提示信息" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="field_values" class="col-sm-2 control-label form-control-static">值</label>
				<div class="col-sm-9 ">
					<textarea name="field_values"  id="field_values"  cols="45" rows="5" class="form-control  validate[required]" placeholder="请输入值" > <?php echo isset($data_info['field_values'])?$data_info['field_values']:'' ?></textarea>
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
		        require(['<?php echo SITE_URL?>scripts/adminpanel/fields/edit.js']);
		    });
		</script>
	
	