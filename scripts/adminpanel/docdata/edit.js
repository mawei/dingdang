	function  chooseWindowBusiness_id(inputId,w,h,iscallback){
		if(!w) w=screen.width-4;
		if(!h) h=screen.height-95;
		if(!iscallback)iscallback=0;
		var window_url = SITE_URL+'adminpanel/business/business_data_window/';
		$.extDialogFrame(window_url+inputId,{model:true,width:w,height:h,title:'请选择...',buttons:null});
	}
	function getBusiness_id(v,t){
		$("#business_id").val(v);
		$("#business_id_text").val(t);
		$("#dialog" ).dialog();$("#dialog" ).dialog("close");
	}

	define(function (require) {
	var $ = require('jquery');
	var aci = require('aci');
	require('bootstrap');
	require('bootstrapValidator');
	require('message');
	require('jquery-ui');
	require('jquery-ui-dialog-extend');
	require('datetimepicker');
	var i = 1;
		$(function () {
		$("#add_row").click(function(){
			$("#delete_row").show();
			i++;
			$(this).prev().clone(true).insertBefore($(this));

			$(this).prev().find("input").each(function(){
					$(this).attr("name",$(this).attr("name").replace(i-1,'') + i);
					$(this).val("");

			})	

		});
		$("#delete_row").click(function(){
			if(i > 1){
				$(this).prev().prev().remove();
				i--;
			}

		});

$("#business_id_text").click(function(){
chooseWindowBusiness_id('business_id',800,550,1,2)
})
            $('#validateform').bootstrapValidator({
				message: '输入框不能为空',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					 user_id: {
						 validators: {
							notEmpty: {
								message: '用户id输入错误输入错误'
							}
						 }
					 },

					 data: {
						 validators: {
							notEmpty: {
								message: '数据输入错误输入错误'
							}
						 }
					 },

					 business_id: {
						 validators: {
							notEmpty: {
								message: '所属业务输入错误输入错误'
							}
						 }
					 },

					 keyword: {
						 validators: {
							notEmpty: {
								message: '文档关键字输入错误输入错误'
							}
						 }
					 },

					 docs: {
						 validators: {
							notEmpty: {
								message: '生成文档输入错误输入错误'
							}
						 }
					 },

				}
			}).on('success.form.bv', function(e) {

				e.preventDefault();
				$("#dosubmit").attr("disabled","disabled");

				$.scojs_message("正在保存，请稍等...", $.scojs_message.TYPE_ERROR);
				$.ajax({
					type: "POST",
					url: is_edit?SITE_URL+"adminpanel/docdata/edit/"+id:SITE_URL+"adminpanel/docdata/add/"+id,
					data:  $("#validateform").serialize(),
					success:function(response){
						var dataObj=jQuery.parseJSON(response);
						if(dataObj.status)
						{
							$.scojs_message('操作成功,3秒后将返回列表页...', $.scojs_message.TYPE_OK);
							aci.GoUrl(SITE_URL+'adminpanel/docdata/',1);
						}else
						{
							$.scojs_message(dataObj.tips, $.scojs_message.TYPE_ERROR);
							$("#dosubmit").removeAttr("disabled");
						}
					},
					error: function (request, status, error) {
						$.scojs_message(request.responseText, $.scojs_message.TYPE_ERROR);
						$("#dosubmit").removeAttr("disabled");
					}
				});

			}).on('error.form.bv',function(e){ $.scojs_message('带*号不能为空', $.scojs_message.TYPE_ERROR);$("#dosubmit").removeAttr("disabled");});

        });
});
