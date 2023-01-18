<html>
    <head>
        <title>MiniBlog - Register</title>
    </head>
    <body>
        <form action="" method="post">
            <h2>Register</h2>
            <label>Username: </label>
            <input type="text" placeholder="Username" id="username"><br>
            <label>Email: </label>
            <input type="email" placeholder="Email" id="email"><br>
            <label>Password: </label>
            <input type="password" placeholder="password" id="password"> <br>
            <label>Confirm Password: </label>
            <input type="password" placeholder="confirm password" id="cpassword"> <br>
            <button type="button" onclick="submitUser('insert')">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
        <?php require 'script.php' ?>
    </body>
</html>