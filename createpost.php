<html>
    <head>
        <title>Create Post</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="posts.php">MiniBlog</a>
                </div>
                <ul class="nav navbar-nav" style="display:flex; float:right">
                <li id="name" style="margin-top:15px"></li>
                <li><a href="login.php">Logout</a></li>
                </ul>
            </div>
        </nav>
        <div style="width:500px; padding: 10px; position:relative; left: 50%; transform: translatex(-50%); box-shadow: 0px 0px 5px 5px #ccc">
            <h2>Create Post</h2>
        </div>
        <div style="width:500px; padding: 10px; position:relative; margin-top: 20px; left: 50%; transform: translatex(-50%); box-shadow: 0px 0px 5px 5px #ccc">
            <form method="post">
                <label>Title: </label>
                <input type="text" placeholder="Enter title" id="title" class="form-control"><br>
                <label>Content: </label>
                <input type="text" placeholder="Enter content" id="content" class="form-control"> <br>
                <button type="button" class="btn btn-primary" onclick="createPost('post')">Post</button>
            </form>
        </div>
        
        <?php require 'script.php' ?>
        <script>getName();</script>
    </body>
</html>