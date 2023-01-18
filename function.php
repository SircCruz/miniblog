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

#for registering new users
function insert(){
    global $conn;

    $name = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "INSERT INTO tbl_accounts (username, email, password) VALUES('$name', '$email', '$password')";
    mysqli_query($conn, $query);
    $data = $name;
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
}
#for logging in
function login(){
    global $conn;

    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT username, email, password FROM tbl_accounts WHERE email = '$email' AND password = '$password'";
    $results = mysqli_query($conn, $query);

    foreach ($results as $result) {
        if ($result["email"] == $email && $result["password"] == $password) {
            $data = $result["username"];
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($data);
        }
        else
            echo("Error");
        return;
    }
    echo("Error");
}
#for creating new post
function post(){
    global $conn;

    $title = $_POST["title"];
    $content = $_POST["content"];
    $date = new DateTime();
    $result = $date->format('Y-m-d H:i:s A');
    
    $query = "INSERT INTO tbl_posts (title, content, date) VALUES('$title', '$content', CAST('$result' AS CHAR(100)))";
    mysqli_query($conn, $query);
    echo "Post successfully created";
}
#for editing post
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
    echo "Post successfully edited";
}
#for deleting post
function delete(){
    global $conn;

    $id = $_POST["id"];
    
    $query = "DELETE FROM tbl_posts WHERE postID = $id";
    mysqli_query($conn, $query);
    echo "Post successfully deleted";
}
?>
