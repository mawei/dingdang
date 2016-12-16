<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/business/createdoc')?>" >
	<div class='panel panel-default '>
		<div class='panel-heading'>
			<i class='fa fa-table'></i> 创建文档
			<div class='panel-tools'>
				<div class='btn-group'>
					<a class="btn " href="<?php echo base_url('adminpanel/business')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
				</div>
			</div>
		</div>
		<div class='panel-body '>
			<?php unset($data_info["fields"]["docs"]); ?>
			<?php foreach($data_info["fields"] as $key =>$values) {?>
			<?if($key=='增行'){?>

				<input type="button" class="btn btn-success btn-xs" value="增行" id="add_row"></input>
				<input type="button" class="btn btn-danger btn-xs" value="删除行" hidden id="delete_row"></input>
			<?}else{?>
					    <fieldset>

						<legend><?echo preg_replace('|[0-9a-zA-Z/]+|', '', $key);?></legend>
<!-- 			<div class="form-group">
				<label for="keyword" class="col-sm-4 control-label form-control-static">选择需要生成的文档</label>
				<div class="col-sm-5 ">
					<?php foreach($data_info["fields"]["docs"] as $key =>$value) {?>
						<input type="checkbox" class="" name="docs[]"  id="" value="<?php echo isset($value['document_id'])?$value['document_id']:'' ?>" checked><?php echo isset($value['name'])?$value['name']:'' ?>
					<?php }?>
				</div>
			</div>	 -->
						<?php foreach($values as $value) {?>

			<div class="form-group col-sm-6">
				<label for="keyword" class="col-sm-4 control-label form-control-static"><?php echo isset($value['field_alias'])?$value['field_alias']:'' ?></label>
				<div class="col-sm-8 ">
					<?if($value['type'] == 'text'){?>
					<textarea class="form-control" rows="5" name="<?php echo isset($value['field_name'])?$value['field_name']:'' ?>"  id="<?php echo isset($value['field_name'])?$value['field_name']:'' ?>"><?php echo isset($value['value'])?$value['value']:'' ?></textarea>
					<?}else if ($value['type'] == 'select'){?>
						<?$vals = explode('|',$value['field_values']);?>
						<select class="form-control" name="<?php echo isset($value['field_name'])?$value['field_name']:'' ?>"  id="<?php echo isset($value['field_name'])?$value['field_name']:'' ?>">
							<?foreach ($vals as $v) {?>
								<option value="<?echo $v;?>"><?echo $v;?></option>
							<?}?>
						</select>
					<?}else{?>
					<input type="text" name="<?php echo isset($value['field_name'])?$value['field_name']:'' ?>"  id="<?php echo isset($value['field_name'])?$value['field_name']:'' ?>" value="<?php echo isset($value['value'])?$value['value']:'' ?>"  
					class="form-control validate[required]" >
					<?}?>
				</div>
			</div>

						<?php }?>
																	</fieldset>
												<?php }?>

												<?php }?>


							<div class='form-actions'>
				<button class='btn btn-primary ' type='submit' id="dosubmit">保存</button>
			</div>
</form>
			<script language="javascript" type="text/javascript">
			var is_edit =<?php echo ($is_edit)?"true":"false" ?>;
			var id =<?php echo $id;?>;


			require(['<?php echo SITE_URL?>scripts/common.js'], function (common) {
		        require(['<?php echo SITE_URL?>scripts/adminpanel/docdata/edit.js']);
		    });
		</script>
	
	