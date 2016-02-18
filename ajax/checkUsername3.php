<?php
header('Content-type:text/html;charset="utf-8"');
error_reporting(0);

$username = trim($_POST['username']);

//echo '你发送过来的用户名：' . $username;

$arr = array('leo','momo','wangliang');
$msg = array('code'=>0, 'message'=>'');

if ( empty($username) ) {
	//echo 1;
	$msg['code'] = 1;
	$msg['message'] = '用户名不能为空';
	echo json_encode($msg);
	exit();
}
if (in_array($username, $arr)) {
	$msg['code'] = 2;
	$msg['message'] = '用户名已经被注册了';
	echo json_encode($msg);
	exit();
}
$msg['code'] = 0;
$msg['message'] = '恭喜你，可以注册';
echo json_encode($msg);
exit();