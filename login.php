<html>
    <head>
        <title>MiniBlog - Login</title>
    </head>
    <body>
        <form method="post">
            <h2>Login</h2>
            <label>Email: </label>
            <input type="email" placeholder="Email" id="email" /><br>
            <label>Password: </label>
            <input type="password" placeholder="password" id="password" /> <br>
            <button type="button" onclick="login('login')">Login</button>
        </form>
        <p>Don't have an account? <a href="2.php">Register</a></p>

        <?php require 'script.php' ?>
    </body>
    
</html>