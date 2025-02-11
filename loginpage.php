
<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <title>Swissblade - Coffee&More</title>
    <link rel="stylesheet" href="./stylesheet/mobile.css" media="screen and (max-width:599px)" />
    <link rel="stylesheet" href="./stylesheet/desktop.css" media="screen and (min-width:600px)" />
    <link href='https://fonts.googleapis.com/css?family=Coda' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/9140fda913.js" crossorigin="anonymous"></script>
</head>

<style>
    .login {
        align-items: center;
        display: flex;
        justify-content:center;
    }
    input {
        width: 200px;
        height: 40px;
        font-size: 20px;
    }
    button {
        border-radius: 5px;
        width: 100px;
        height: 40px;
        font-size: 20px;
    }
    button:hover {
        background-color:rgba(121, 12, 12);
        color:white;
    }
    a {
        margin-left: 20px;
        font-size: 20px;
    }
</style>

<body>
    <!--Η ενότητα header περιλαμβάνει τον τίτλο και μια σύντομη περιγραφή του καφέ-->
    <header>
        <h1>Swissblade</h1>
        <h2>Not your average bookstore cafe</h2>
        <p>A multi-verse experience in the heart of Athens</p>
    </header>

    <nav>
        <div class="login">				   
            <form action="includes/login.inc.php" method="POST">
                <input type="text" name="uid" placeholder="username">
                <input type="password" name="pwd" placeholder="password">
                <button type="submit" name="submit">Login</button>
            </form>
            <a href="pages/signup.php">Sign up</a> 
        </div>
    </nav>
</body>