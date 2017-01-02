//定义ltcms 类（对象）
var ltcms = {
	//成功是执行方法
	//
	error:function(message){
		layer.open({
			title:'错误',
			icon:0,
			content: message,
		})
	},
	success :function (message,url){
		layer.open({
			title:'成功',
			icon:1,
			content:message,
			yes:function(){
				location.href=url
			}
		})
	},
	


}