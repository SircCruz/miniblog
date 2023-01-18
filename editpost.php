<html>
    <head>
        <title>Edit Post</title>
    </head>
    <body>
        <h2> Edit Post </h2>
        <form method="post">
            <?php 
        
            require('config.php');
            $id = $_GET["id"];
            $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tbl_posts WHERE postID = $id"));

            ?>

            <input type="hidden" id="id" value="<?php echo $id ?>">
            <label>New Title: </label>
            <input type="text" placeholder="Enter new title" id="title" value="<?php echo $rows['title']; ?>"><br>
            <label>New Content: </label>
            <input type="text" placeholder="Enter new content" id="content" value="<?php echo $rows['content']; ?>"> <br>
            <button type="button" onclick="editPost('edit')">Update post</button>

            <?php require('script.php') ?>
        </form>
    </body>
</html>