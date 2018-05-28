<?php
include_once("connect.php");//连接数据库

$q=mysqli_query($link,"select * from comments");//获取数据库的数据
while($row=mysqli_fetch_array($q)){
    $comments[] = array("id"=>$row['id'],"user"=>$row['user'],"comment"=>$row['comment'],"addtime"=>$row['addtime']);
}
echo json_encode($comments);//以json格式编码  <?php
/**
 * Created by PhpStorm.
 * User: yhs
 * Date: 2018/4/28
 * Time: 下午9:57
 */