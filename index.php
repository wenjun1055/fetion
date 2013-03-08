<?php
require 'lib/PHPFetion.php';

$phone='飞信好嘛';
$pwd='微信密码';
$to='要发送的人的手机好嘛';
$msg='要发送的信息';
$fetion = new PHPFetion($phone, $pwd);	// 手机号、飞信密码
if($fetion->send($to, $msg))// 接收人手机号、飞信内容
{echo "发送成功";}else{echo "发送失败,请重试!";}
?>