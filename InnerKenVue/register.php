<?php
    include_once("../function/item.php");
class register extends DB{
    if (empty($_POST)) {
        exit("您提交的表单数据超过post_max_size! <br>");
    
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    if ($password != $confirmPassword) {
        exit("输入的密码与确认密码不相等！");
    }

    $userName = $_POST['userName'];
    $domain = $_POST['domain'];
    $userName = $userName . $domain;

    // 判断用户名是否重复
    $userNameSQL = "select * from users where userName = '$userName'";
    getConnect();
    $resultSet = mysql_query($userNameSQL);
    if (mysql_num_rows($resultSet) > 0) {
        exit("用户名已被占用，请更换其他用户名");
    }
   
    $registerSQL = "insert into users values(null, '$userName', '$password' )";
   
    $userSQL = "select * from users where user_id = '$userID'";
    $userResult = mysqli_query($userSQL);
    if ($user = mysqli_fetch_array($userResult)) {
        echo "您的注册用户名为：" . $user['userName'];
    } else {
        exit("用户注册失败！");
    }
    closeConnect();
}
?>