<html>
    <head>
        <title>MiniBlog - Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>  
    </head>
    <body>
        <form method="post" style=" width: 400px; position: absolute; left: 50%; transform: translatex(-50%);">
            <h2>Login</h2>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <button type="button" class="btn btn-primary" onclick="login('login')">Login</button>
            <label>Don't have an account? <a href="register.php">Register</a></label>
        </form>
        <?php require 'script.php' ?>
    </body>
    
</html>