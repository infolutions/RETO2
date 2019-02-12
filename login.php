<?PHP
    header("Content-Type: text/html; charset=utf8");
   if(!isset($_POST["submit"])){
        exit("Error");
    }//判断是否有submit操作

    include('conecta.php');//链接数据库
    $name = $_POST['Usuario'];//post获得用户名表单值
    $passowrd = $_POST['Contraseña'];//post获得用户密码单值

    if ($name && $passowrd){//如果用户名和密码都不为空
             $sql = "select * from usu where acc = '$name' and pass='$passowrd'";//检测数据库是否有对应的username和password的sql
             $result = mysqli_query($con,$sql);//执行sql
             $rows=mysqli_num_rows($result);//返回一个数值
             if($rows){//0 false 1 true
                   header("refresh:0;url=index.html");//如果成功跳转至index.html页面
                   exit;
             }else{
                echo "Error de Usuario/Contraseña<br>";
                echo "Espera que salta la pagina automaticamente.."
                echo "
                    <script>
                            setTimeout(function(){window.location.href='Login.html';},3000);
                    </script>

                ";//如果错误使用js 1秒后跳转到登录页面重试;
             }
             

    }else{//如果用户名或密码有空
                echo "no esta completa<br>";
                echo "Espera que salta la pagina automaticamente.."
                echo "
                      <script>
                           // setTimeout(//function(){window.location.href='Login.html';},3000);
                      </script>";

                        //如果错误使用js 1秒后跳转到登录页面重试;
    }

    mysqli_close($con);//关闭数据库
?>