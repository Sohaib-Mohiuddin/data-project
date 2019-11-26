<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "Sohaibm131";
$database = "school_yshaik";
$users = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully\n";

//Logging in the user
if (isset($_POST['login_user'])){

    $studentid = mysqli_real_escape_string($conn, $_POST['studentid']);
    // $password = mysqli_real_escape_string($conn, $_POST['password']);

    
    //Check Connection
    if (!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }

    header('location: student_homepage.php');
}
?>