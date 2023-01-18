<html>
    <head>
        <title>MiniBlog - Home</title>
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
            <button type="button" class="btn btn-primary" onclick="window.location = 'createpost.php'">Create a post</button>
        </div>

            <?php 
            
            require('config.php');
            $rows = mysqli_query($conn, "SELECT * FROM tbl_posts");

            foreach($rows as $row) :
            ?>
            <div style="width:500px; padding: 10px; position:relative; margin-top: 20px; left: 50%; transform: translatex(-50%); box-shadow: 0px 0px 5px 5px #ccc">
                <h3><?php echo $row["title"]?></h3>
                <div style="transform: translateY(-10px)"><small><?php echo $row["date"]?></small></div>
                <p><?php echo $row["content"]?></p>

                <hr>
                <a href="editpost.php?id=<?php echo $row['postID']?>">Edit</a>
                <button type="button" class="btn btn-danger" style="margin-left: 7px" onclick="deletePost('delete', <?php echo $row['postID']?>)">Delete</button>
                <br>
            </div>
            <?php 
                endforeach;
                require('script.php');
            ?>
        <script>getName();</script>
    </body>
</html>