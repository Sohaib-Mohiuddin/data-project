<?php
session_start();
$servername = "db4free.net";
$username = "yshaik392";
$password = "testing123";
$database = "school_yshaik";
$users = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully\n";

//Logging in the user
if (isset($_POST['login_user'])){

    $employeeid = mysqli_real_escape_string($conn, $_POST['employeeid']);

    
    //Check Connection
if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

 
    $query = "SELECT * FROM student WHERE SN='$employeeid' LIMIT 1";
    $results = mysqli_query($conn, $query);
    $user = mysqli_fetch_array($results);
     

    if (mysqli_num_rows($results) == 1){
        $_SESSION['users'] = array();
        $_SESSION['users']['SN'] = $user['SN'];
        $_SESSION['users']['Fname'] = $user['Fname'];
        $_SESSION['users']['Lname'] = $user['Lname'];
        $_SESSION['users']['Dob'] = $user['Dob'];
        $_SESSION['users']['PN'] = $user['PN'];
        $_SESSION['users']['Email'] = $user['Email'];
        $_SESSION['users']['Major'] = $user['Major'];

        //$_SESSION['username'] = implode(',', $user);
        header('location: firstpage.php');
    }

    else{
        array_push($errors, "Invalid ID");
        
    }

}
?>