<?php 
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function index() {
		$this->display();
	}
	public function check() {
		//获取用输入的户名密码
		$username = $_POST['username'];
		$password = $_POST['password'];
		//校验输入
		if (!trim($username)) {
			show(0,'用户名不正确');
		}
		if (!trim($password)) {
			show(0,'密码不正确');
		}

		//到数据库查询用户密码是否存在/正确
		$model = D('Admin');
		$rs = $model->getAdminByUsername($username);

		if (!rs) {
			return show(0,'用户不存在');
		}

		$password = getMd5Password($password);
		if($rs['password'] != $password) {
			return show(0,'登录失败'); 
		}
		session('user',$rs);
		show(1,'登陆成功','/admin');
	}

}
?>