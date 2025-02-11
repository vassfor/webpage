
<html>

<style>
    body {
        background-image: url('../images/menu_bg.jpg');
        background-size: 40%;
        background-repeat: repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    h2 {
        font-size: 50px;
        color:aliceblue;
        text-shadow: 1px 1px 2px burlywood;
    }
    form {
        max-width: 300px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    input {
        width: 300px;
        height: 50px;
        border-radius: 5px;
        margin-top: 10px;
    }
    button {
        margin-top: 15px; 
        width: 200px;
        height: 40px;
        border-radius: 5px;
    }
    button:hover {
        color: white;
        background-color: rgba(121, 12, 12);
    }
</style>

<body>
    <section class="signup">
        <h2>SIGN UP</h2>
        <div>
            <form action="../includes/signup.inc.php" method="POST">
                <input type="text" name="first_name" placeholder="Firstname">
                <input type="text" name="last_name" placeholder="Lastname">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="uid" placeholder="username">
                <input type="password" name="pwd" placeholder="password">
                <button type="submit" name="submit">SIGN UP</button>
            </form>
        </div>
    </section>
</body>

</html>
