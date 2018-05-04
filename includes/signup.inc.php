<?php
    if(isset($_POST['submit']))
    {
        require 'database_include.php';

        $name = mysqli_real_escape_string($conn,$_POST['Name']);
        $email = mysqli_real_escape_string($conn,$_POST['Email']);
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['Password']);
        $location = mysqli_real_escape_string($conn,$_POST['Location']);

        if(empty($name) || empty($email) || empty($username) || empty($password))
        {
            header("Location: ../index.php?signup=empty");
            exit();
        }else{
            if(!preg_match("/^[a-zA-Z ]*$/",$name)){   
                header("Location: ../index.php?signup=invalid");
                exit();
             }else{
                 if(!filter_var($email,FILTER_VALIDATE_EMAIL))
                 {
                    header("Location: ../index.php?signup=emailInvalid");
                    exit();
                 }
                 else
                 {
                     $sql = "SELECT * FROM  users WHERE user_uid='$username'";
                     $result=mysqli_query($conn,$sql);
                     $resultCheck=mysqli_num_rows($result);

                     if($resultCheck>0)
                     {
                         header("Location: ../index.php?signup=usertaken");
                     }else{
                        $hashedPassword=password_hash($password,PASSWORD_DEFAULT);
                        $sql="INSERT INTO users (user_Fullname,user_email,user_uid,user_password,user_location)  VALUES ('$name','$email','$username','$hashedPassword','$location');";
                        mysqli_query($conn,$sql);
                        header("Location: ../index.php?signup=success");
                        exit();
                    }
                 }
             }
        }
    }else
    {
        header("Location: ../index.php");
        exit();
    }

?>