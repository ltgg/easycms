var login ={
	check:function(){
		var username = $('input[name="username"]').val();
		var password = $('input[name="password"]').val();

		if (!username.trim()) {
			return ltcms.error('用户名不能为空');
		}
		if (!password.trim()) {
			return ltcms.error('密码不能为空')
		}
		//ajax 数据提交 链接 数据 返回数据 返回格式
		$.post('/admin/login/check', {username: username ,password:password}, function(result) {
			if (result['state']==1) {
				ltcms.success('登陆成功','/admin/')
			}else{
				ltcms.error('登陆失败')
			}

		},'json');

	}
	
}