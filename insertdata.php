<?php
session_start();
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $question = $_POST["question"];
    $answer = $_POST["answer"];

    $con = new mysqli($host, $username, $password, $database);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "INSERT INTO quiz (question, answer)
            VALUES ('$question', '$answer')";
    
    if ($con->query($sql) === TRUE) {
        $_SESSION['status'] = "Record inserted successfully";
        $_SESSION['status_code'] = "success";
    } else {
        $_SESSION['status'] = "Error: " . $sql . "<br>" . $con->error;
        $_SESSION['status_code'] = "error";
    }

    $con->close();
    header("Location: index.php");
    exit();
}
?>
