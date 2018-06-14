<?php
include_once ("DataBaseR.php");
connectDB();

header("Content-Type: text/html; charset=utf8");

if(!isset($_POST['submit'])){
    exit("错误执行");
}//判断是否有submit操作
$email=$_POST['email'];
$username=$_POST['name'];//post获取表单里的name
$password=$_POST['password'];//post获取表单里的password


$sqlinsert="insert into user(email,username,password) values ('$name','$password')";//向数据库插入表单传来的值的sql
$reslut=mysqli_query($sqlinsert,$conn);//执行sql

if (!$reslut){
    die('Error: ' . mysqli_error());//如果sql执行失败输出错误
}else{
    echo "注册成功";//成功输出注册成功
}



mysqli_close($conn);//关闭数据库