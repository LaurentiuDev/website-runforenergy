<?php

session_start();

if(isset($_POST['Login']))
{
    require 'database_include.php';

    $uid=mysqli_real_escape_string($conn,$_POST['login-username']);
    $password=mysqli_real_escape_string($conn,$_POST['login-password']);


    if(empty($uid) || empty($password)){
        header("Location: ../index.php?login=emptyfield");
        exit();
    }else{
        $sql="SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);

        if($resultCheck<1)
        {
            header("Location: ../index.php?login=userIncorrect");
            exit();
        }
        else{
            if($row=mysqli_fetch_assoc($result))
            {
                $hashedPasswordCheck = password_verify($password,$row['user_password']);
                if($hashedPasswordCheck==false)
                {
                    header("Location: ../index.php?login=wrongPassword");
                     exit();
                }elseif($hashedPasswordCheck==true){
                    $_SESSION['u_id']=$row['user_id'];
                    $_SESSION['u_fullname']=$row['user_Fullname'];
                    $_SESSION['u_email']=$row['user_email'];
                    $_SESSION['u_uid']=$row['user_uid'];
                   
                    header("Location: ../index.php?login=success");
                    exit();
                }
            }
        }
    }
}
else
{
        header("Location: ../index.php?login=error");
        exit();
}



?>