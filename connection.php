<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "school_yshaik";
$users = "";

$conn = new mysqli($servername, $username, $password, $database);

// Create connection


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Logging in the user
if (isset($_POST['login_user']) && $_POST['dropdown']!=" " ){

    $studentid = mysqli_real_escape_string($conn, $_POST['studentid']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    
    //Check Connection
    if (!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
            if ($_POST['dropdown'] == "student"){
            $query1 = "SELECT * FROM slogin WHERE SN='$studentid' AND password= '$password' LIMIT 1";
            $res= mysqli_query($conn, $query1);
            $user = mysqli_fetch_array($res);
            if (mysqli_num_rows($res) > 0){
                $_SESSION['users'] = array();
                $_SESSION['users']['SN'] = $user['SN'];
               header('location: student_homepage.php');
            }
        }
        else if ($_POST['dropdown'] == "professor" ){
            
                $query1 = "SELECT * FROM plogin WHERE Profno='$studentid' AND password= '$password' LIMIT 1";
                $res= mysqli_query($conn, $query1);
                $user = mysqli_fetch_array($res);
                if (mysqli_num_rows($res) > 0){
                    $_SESSION['users'] = array();
                    $_SESSION['users']['Profno'] = $user['Profno'];
                   header('location: prof_homepage.php');
                }
            
        }
        else if ($_POST['dropdown'] == "admin" ){
            
            $query1 = "SELECT * FROM alogin WHERE Ano='$studentid' AND password= '$password' LIMIT 1";
            $res= mysqli_query($conn, $query1);
            $user = mysqli_fetch_array($res);
            if (mysqli_num_rows($res) > 0){
                $_SESSION['users'] = array();
                $_SESSION['users']['Ano'] = $user['Ano'];
               header('location: admin_homepage.php');
            }
        }
}
    else {
        
        echo "Please select valid value from dropdown list";
      }

      if (isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    } 
  
 ?>     
   
    
    
    
    