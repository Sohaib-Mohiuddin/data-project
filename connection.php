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

 
    $query = "SELECT SN, Fname, Lname, PN FROM student";
    $results = mysqli_query($conn, $query);
    $user = mysqli_fetch_array($results);
    
    if (mysqli_num_rows($results) > 0){
        // while (mysqli_fetch_array($results)) {
        $_SESSION['users'] = array();
        $_SESSION['users']['SN'] = $user['SN'];
        $_SESSION['users']['Fname'] = $user['Fname'];
        $_SESSION['users']['Lname'] = $user['Lname'];
        $_SESSION['users']['PN'] = $user['PN'];
        // }

        header('location: student_homepage.php');
    }
}
?>