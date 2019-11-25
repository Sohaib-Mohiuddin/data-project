<?php
session_start();
$servername = "db4free.net";
$username = "yshaik392";
$password = "testing123";
$database = "school_yshaik";
$users = "";
$resultt = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully\n";

//Logging in the user
if (isset($_POST['login_user'])){

    $studentid = mysqli_real_escape_string($conn, $_POST['studentid']);
    // $password = mysqli_real_escape_string($conn, $_POST['password']);

    
    //Check Connection
    if (!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }

 
    $query = "SELECT * FROM enrolled_in WHERE SN='$studentid'";
    $results = mysqli_query($conn, $query);
    $user = mysqli_fetch_array($results);
    
    $_SESSION['resultt'] = $results;

    if (mysqli_num_rows($results) > 0){
        $_SESSION['users'] = array();
        $_SESSION['users']['SN'] = $user['SN'];
        $_SESSION['users']['CRN'] = $user['CRN'];
        $_SESSION['users']['Cname'] = $user['Cname'];

        //$_SESSION['username'] = implode(',', $user);
        header('location: firstpage.php');
    }
}
?>