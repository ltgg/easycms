<?php 
//application\Common\funciton  公共方法在admin、home 中直接使用
//show 将数据返回前段
function show($state, $message, $url) {
	$array = array(
		'state' => $state,
		'message' => $message,
		'url' => $url 
	);
	exit(json_encode($array));
}
	// 获取加密后的密码
function getMd5Password($password) {
	return MD5($password.C('PWD_PRE'));
}	

?>