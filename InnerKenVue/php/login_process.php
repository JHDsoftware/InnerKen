<?PHP
header("Content-Type: text/html; charset=utf8");
//if(!isset($_POST["submit"])){
//    exit("错误执行");
//}

include('DataBaseR.php');
$conn=connectDB();//链接数据库
$email = $_POST['email'];//post获得用户名表单值
$passowrd = $_POST['password'];//post获得用户密码单值

if ($email && $passowrd){//如果用户名和密码都不为空
    $sql = "select * from user where email = '$email' and password='$passowrd'";//检测数据库是否有对应的username和password的sql
    $result = mysqli_query($sql);//执行sql
    $rows=mysqli_num_rows($result);//返回一个数值
    if($rows){
        header("refresh:0;url=index.html");
        exit;
    }else{
        echo "用户名或密码错误";
        echo "
                    <script>
                            setTimeout(function(){window.location.href='../login.html';},1000);
                    </script>

                ";
    }


}else{//如果用户名或密码有空
    echo "表单填写不完整";
    echo "
                      <script>
                            setTimeout(function(){window.location.href='../login.html';},1000);
                      </script>";


}

mysqli_close($conn);//关闭数据库

