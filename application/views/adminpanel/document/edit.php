<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/document/edit')?>" >
	<div class='panel panel-default '>
		<div class='panel-heading'>
			<i class='fa fa-table'></i> 文档管理 修改信息
			<div class='panel-tools'>
				<div class='btn-group'>
					<a class="btn " href="<?php echo base_url('adminpanel/document')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
				</div>
			</div>
		</div>
		<div class='panel-body '>
								<fieldset>
						<legend>基本信息</legend>
													
	<div class="form-group">
				<label for="name" class="col-sm-2 control-label form-control-static">文档名称</label>
				<div class="col-sm-9 ">
					<input type="text" name="name"  id="name"  value='<?php echo isset($data_info['name'])?$data_info['name']:'' ?>'  class="form-control validate[required]"  placeholder="请输入文档名称" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="route" class="col-sm-2 control-label form-control-static">路径</label>
				<div class="col-sm-9 ">
					<a id="route_a"  ><img  width="100" id="route_SRC" border="1" src="<?php echo SITE_URL?><?php echo isset($data_info["route"])?"doc".$data_info["route"]:"images/nopic.gif" ?>"/></a>
<input type="hidden" id="route" name="route" value="<?php echo isset($data_info["route"])?$data_info["route"]:"" ?>" /> <a id="route_b" class="btn btn-default btn-sm" > 选择图片 ...</a><span class="help-block">只支持图片上传.</span>
				</div>
			</div>
													
	<div class="form-group">
				<label for="fee" class="col-sm-2 control-label form-control-static">费用</label>
				<div class="col-sm-9 ">
					<input type="number" name="fee"  id="fee"  value='<?php echo isset($data_info['fee'])?$data_info['fee']:'' ?>'   class="form-control  validate[required,custom[integer]]" placeholder="请输入费用" >
				</div>
			</div>
																										
	<div class="form-group">
				<label for="business_id" class="col-sm-2 control-label form-control-static">所属业务</label>
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
		        require(['<?php echo SITE_URL?>scripts/adminpanel/document/edit.js']);
		    });
		</script>
	
	