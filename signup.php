<?php 
    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST["submit"])){
        exit("Error");
    }//判断是否有submit操作

    $Usuario=$_POST['Usuario'];//post获取表单里的name
    $Contraseña=$_POST['Contraseña'];//post获取表单里的password

    include('conecta.php');//链接数据库
    $q="insert into usu(id,acc,pass) values (null,'$Usuario','$Contraseña')";//向数据库插入表单传来的值的sql
    $reslut=mysqli_query($con,$q);//执行sql
    
    if (!$reslut){
        die('Error: ' . mysqli_error($con));//如果sql执行失败输出错误
    }else{
        echo "Registro exitoso";
        echo "
            <script>
                    setTimeout(function(){window.location.href='Login.html';},5000);
            </script>";//成功输出注册成功
    }

    

    mysqli_close($con);//关闭数据库

?>