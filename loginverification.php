<?php
    verify();

    function verify(){

    }
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $query = "SELECT * FROM `tbl_accounts` WHERE 'email' = $email AND 'password' = $password";
    $result = $conn->query($query);
    if($fetcher = $result->fetch_assoc())
    echo "id: " . $fetcher["user_ID"]. " - Account: " . $fetcher["email"]. " " . $fetcher["password"]. "<br>";
    else{
        echo "Wrong username or password";
    }
?>
