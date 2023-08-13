<?php

session_start();

if(isset($_POST['email'])&&isset($_POST['pass'])){
     $email=$_POST['email'];
    $pass = $_POST['pass'];
    require "dbconn.inc.php";
    $str = "select * from tbl_admin where admin_uname ='".$email."';";
    $result = $con->query($str);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            if($pass!=$row['admin_pass']){
                $_SESSION['!admin_pass_match'] = "Please Enter Your Correct  Password";
                header('location:../login.php');
            }else{
                echo "Please Enter Your";
                $_SESSION['uname'] = $_POST['email'];
                header('location:../admin.php');
            }
        }
    }else{
        $_SESSION['admin_err'] = "Admin Email is Incorrect";
        header('location:../login.php');
    }
    
}

 ?>