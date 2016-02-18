<?php
//后端是如何接收前端提交过来的数据的
//如果是表单提交过来的数据，那要根据数据提交的方式来决定
//前端向后端提交数据的方式有很多种，不同的提交方式通过不同方式去接收

$username = $_GET['username'];
$password = $_GET['password'];

if (empty($username)) {
	echo '<script>alert("用户名不能为空");window.history.go(-1)</script>';
}

echo "您提交过来的数据是<br /> username:$username<br>password:$password";

?>