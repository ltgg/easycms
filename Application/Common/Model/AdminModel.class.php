<?php
//曾在次犯过过错误。命名空间 用 程序所在路径命名 model中的类用 所使用到的数据库命名
namespace Common\Model;
use Think\Model;
class AdminModel extends Model {
	private $_db = '';
	function __construct() {
		$this->_db = M('admin');
	}

	public function getAdminByUsername($username) {
		$rst = $this->_db->where('username = "' .$username . '"')->find();
		return $rst;
	}
}