<?php

require 'config.php';
if (isset($_POST["action"])) {
    if ($_POST["action"] == "insert") {
        insert();
    }
    if ($_POST["action"] == "login") {
        login();
    }
    if ($_POST["action"] == "post") {
        post();
    }
    if ($_POST["action"] == "edit") {
        edit();
    }
    if ($_POST["action"] == "delete") {
        delete();
    }
}

function insert(){
    global $conn;

    $name = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "INSERT INTO tbl_accounts (username, email, password) VALUES('$name', '$email', '$password')";
    mysqli_query($conn, $query);
    echo "added successfully";
}
function login(){
    global $conn;

    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT email, password FROM tbl_accounts WHERE email = '$email' and password = $password";
    $results = mysqli_query($conn, $query);

    foreach ($results as $result)
        if ($result["email"] == $email && $result["password"] == $password)
            echo "Success";
        else
            echo "Wrong username or password";
    if ($results == null)
            echo "Wrong username or password";
}
function post(){
    global $conn;

    $title = $_POST["title"];
    $content = $_POST["content"];
    $date = new DateTime();
    $result = $date->format('Y-m-d H:i:s A');
    
    $query = "INSERT INTO tbl_posts (title, content, date) VALUES('$title', '$content', CAST('$result' AS CHAR(100)))";
    mysqli_query($conn, $query);
    echo "post successfully created";
}

function edit(){
    global $conn;

    $id = $_POST["id"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $date = new DateTime();
    $result = $date->format('Y-m-d H:i:s A');
    $edited = 'Edited: '.$result;
    
    $query = "UPDATE tbl_posts SET title = '$title', content = '$content', date = CAST('$edited' AS CHAR(100)) WHERE postID = $id";
    mysqli_query($conn, $query);
    echo "post successfully edited";
}

function delete(){
    global $conn;

    $id = $_POST["id"];
    
    $query = "DELETE FROM tbl_posts WHERE postID = $id";
    mysqli_query($conn, $query);
    echo "post successfully deleted";
}
?>
