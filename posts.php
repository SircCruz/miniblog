<html>
    <head>
        <title>MiniBlog - Home</title>
    </head>
    <body>
        <h2> Welcome! </h2>
        <button type="button" onclick="window.location = 'login.php'">Logout</button> <br>
        <button type="button" onclick="window.location = 'createpost.php'">Create a post</button>

        <?php 
        
        require('config.php');
        $rows = mysqli_query($conn, "SELECT * FROM tbl_posts");

        foreach($rows as $row) :
        ?>

        <h3><?php echo $row["title"]?></h3>
        <p><?php echo $row["date"]?></p>
        <p><?php echo $row["content"]?></p>

        <hr>
        <a href="5.php?id=<?php echo $row['postID']?>">Edit</a>
        <button type="button" onclick="deletePost('delete', <?php echo $row['postID']?>)">Delete</button>
        <br>
        <?php 
            endforeach;
            require('script.php');
        ?>
    </body>
</html>