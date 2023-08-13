<?php
session_start();
if(isset($_POST['email'])&& isset($_POST['pass'])){
    $email=$_POST['email'];
    $pass = $_POST['pass'];
    require "dbconn.inc.php";
    $str = "select * from tbl_user where u_email='$email' ";
    $result = $con->query($str);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            if($pass!=$row['u_pass']){
                $_SESSION['!login_pass_match'] = "Please Enter Your Correct Password";
                header('location:../../login.php');
            }else{
                $_SESSION['email'] = $row['u_email'];
                $_SESSION['name']=$row['u_name'];
                $_SESSION['gender']=$row['u_gender'];
                $_SESSION['city']=$row['u_city'];
                $_SESSION['district']=$row['u_district'];
                $_SESSION['dob']=$row['u_dob'];
                print_r($_SESSION);
                header('location:../../search.php');
            }
        }
    }else{
        $_SESSION['login_err'] = "Email is not registered";
        header('location:../../register.php');
    }
}

?>
