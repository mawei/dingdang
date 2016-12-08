	function uploadOneFile(inputId,w,h,iscallback){
		if(!w) w=screen.width-4;
		if(!h) h=screen.height-95;
		if(!iscallback)iscallback=0;
		var window_url = SITE_URL+'adminpanel//document/upload/';
		$.extDialogFrame(window_url+'1/route/'+inputId+'/'+iscallback,{model:true,width:w,height:h,title:'请上传...',buttons:null});
	}
	function getRoute(v,s,w,h){
		$("#route").val(v);
		$("#route_SRC").attr("src",SITE_URL+"doc/"+v);
		$("#dialog" ).dialog();$("#dialog" ).dialog("close");
	}
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

		$(function () {


		$("#route_a").click(function(){
			uploadOneFile('route',550,350,1)
		});
		$("#route_b").click(function(){
			uploadOneFile('route',550,350,1)
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
					 name: {
						 validators: {
							notEmpty: {
								message: '文档名称输入错误'
							}
						 }
					 },

					 fee: {
						 validators: {
							notEmpty: {
								message: '费用输入错误'
							}
						 }
					 },

					 business_id: {
						 validators: {
							notEmpty: {
								message: '所属业务输入错误'
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
					url: is_edit?SITE_URL+"adminpanel/document/edit/"+id:SITE_URL+"adminpanel/document/add/",
					data:  $("#validateform").serialize(),
					success:function(response){
						var dataObj=jQuery.parseJSON(response);
						if(dataObj.status)
						{
							$.scojs_message('操作成功,3秒后将返回列表页...', $.scojs_message.TYPE_OK);
							aci.GoUrl(SITE_URL+'adminpanel/document/',1);
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
