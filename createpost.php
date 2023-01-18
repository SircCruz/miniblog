<html>
    <head>
        <title>Create Post</title>
    </head>
    <body>
        <h2> Create Post </h2>
        <form method="post">
            <label>Title: </label>
            <input type="text" placeholder="Enter title" id="title"><br>
            <label>Content: </label>
            <input type="text" placeholder="Enter content" id="content"> <br>
            <button type="button" onclick="createPost('post')">Post</button>
        </form>
        <?php require 'script.php' ?>
    </body>
</html>