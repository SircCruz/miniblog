<html>
    <head>
        <title>Edit Post</title>
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
            <h2>Edit Post</h2>
        </div>
        <div style="width:500px; padding: 10px; position:relative; margin-top: 20px; left: 50%; transform: translatex(-50%); box-shadow: 0px 0px 5px 5px #ccc">
            <form method="post">
                <?php 
            
                require('config.php');
                $id = $_GET["id"];
                $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tbl_posts WHERE postID = $id"));

                ?>

                <input type="hidden" id="id" value="<?php echo $id ?>">
                <label>New Title: </label>
                <input class = "form-control" type="text" placeholder="Enter new title" id="title" value="<?php echo $rows['title']; ?>"><br>
                <label>New Content: </label>
                <input class="form-control" type="text" placeholder="Enter new content" id="content" value="<?php echo $rows['content']; ?>"> <br>
                <button class="btn btn-primary" type="button" onclick="editPost('edit')">Update post</button>
            </form>
        </div>
        
        <?php require('script.php') ?>
        <script>getName();</script>
    </body>
</html>