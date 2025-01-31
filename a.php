<?php
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD', '');
define('DB_DATABASE', 'project');
    $db_connect=mysqli_connect(DB_SERVER,DB_SERVER_USERNAME,DB_SERVER_PASSWORD,DB_DATABASE) 
    or die("could not connect to DB");
    mysqli_select_db($db_connect,DB_DATABASE)
    or die("could not find DB");
    date_default_timezone_set("Asia/Calcutta");
    $sql="insert into register(Name,Email,Password) values('".$_REQUEST["text"]."','".$_REQUEST["email"]."','".$_REQUEST["pass"]."')";
    $res=mysqli_query($db_connect,$sql);
    if($res){
        echo"<script>alert('succes')</script>";
        echo"<script>window.location.href='main.html'</script>";
    }
    else{
        echo "<script> alert('failed')</script>";
    }
    
?>
