<?php
header('Content-type:text/html;charset="utf-8"');
error_reporting(0);

$username = trim($_GET['username']);

//echo '你发送过来的用户名：' . $username;

$arr = array('leo','momo','wangliang');

if ( empty($username) ) {
	echo 1;
	exit();
}
if (in_array($username, $arr)) {
	echo 2;
	exit();
}
echo 0;
exit();