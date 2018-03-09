<?php
session_start();
if(isset($_POST['email']) && $_POST['password']){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        require('../include/db.php');
        $email = $_POST['email']; 
        $password = md5($_POST['password']);
        $query = "SELECT name,email,password FROM user WHERE email = '".$email."'";
        $result = mysqli_query($con , $query);
        $row = mysqli_fetch_assoc($result);
        if($row['email'] == $_POST['email'] && $row['password'] == md5($_POST['password'])){
            $sess = session_id();
            $_SESSION['token'] = $sess;
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            header('location:../home.php');
            
        }
        else{
            $_SESSION['code'][1] = "Invalid Login";
            header("location:".$_SERVER['HTTP_REFERER']);
        }
        
    }
    else{
        $_SESSION['code'][1] = "Null data";
        header("location:".$_SERVER['HTTP_REFERER']);
    }
}
else{
    $_SESSION['code'][1] = "Provide Login Credentials";
    header("location:".$_SERVER['HTTP_REFERER']);
}
?>