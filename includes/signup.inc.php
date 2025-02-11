
<?php

if(isset($_POST['submit'])) {
    include_once '../databases/connect2.php';

    $firstname=$_POST['first_name'];
    $lastname=$_POST['last_name'];
    $email=$_POST['email'];
    $username=$_POST['uid'];
    $password=$_POST['pwd'];

    

    if(empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password)){
        header("Location: ../pages/signup.php?signup=empty");
        exit();
    }
    else{
        if( !preg_match("/[a-zA-Z]/", $firstname) || !preg_match("/[a-zA-Z]/", $lastname)) {
            header("Location: ../pages/signup.php?signup=invalid");
            exit();
        }
        else{
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				header("Location: ../pages/signup.php?signup=email");
		        exit();
			}
            else {
                $sql = "SELECT *FROM users WHERE user_uid='$username';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                    header("Location: ../pages/signup.php?usertaken");
                    exit();
                }
                else {
                    $hashedpwd=password_hash($password, PASSWORD_DEFAULT);
                    $sql="INSERT INTO users(user_firstname, user_lastname, user_email, user_uid, user_pwd) VALUES('$firstname', '$lastname', '$email', '$username', '$hashedpwd');";
                    $result = mysqli_query($conn, $sql);
                    header("Location: ../pages/index.html?signup=success");
                    exit();
                }
            }
        }

    }
}
else{
    header("Location: ../pages/signup.php");
    exit();
}

?>