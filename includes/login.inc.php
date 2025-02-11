
<?php

session_start();

if(isset($_POST['submit'])) {

    include '../databases/connect2.php';
    $uid=$_POST['uid'];
    $password=$_POST['pwd'];

    if(empty($uid) || empty($password)) {
        header("Location: ../loginpage.php?login=empty");
        exit();
    }
    else{
        $sql = "SELECT *FROM users WHERE user_uid='$uid';";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck == 0){
            header("Location: ../loginpage.php?login=error");
            exit();
        }
        else{
            $row = mysqli_fetch_assoc($result);
            if($row>0){
                $hashedpwd=password_verify($password,$row['user_pwd']);
                if($hashedpwd==false){
                    header("Location: ../loginpage.php?login=errorr");
                    exit();
                }elseif($hashedpwd==true){
                    $_SESSION['u_id'] =$row['user_id'];
                    $_SESSION['u_first'] =$row['user_firstname'];
                    $_SESSION['u_last'] =$row['user_lastname'];
                    $_SESSION['u_email'] =$row['user_email'];
                    $_SESSION['u_username'] =$row['user_uid'];
                    header("Location: ../pages/index.html?login=success");
                    exit();
                }
            }
        }
    }
}