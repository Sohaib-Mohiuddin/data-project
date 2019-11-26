<?php include('connection.php'); 
// if (isset($_POST['login_user'])){
//     $studentid = mysqli_real_escape_string($conn, $_POST['studentid']);
//     // $password = mysqli_real_escape_string($conn, $_POST['password']);

//     //Check Connection
//     if (!$conn){
//         die("Connection failed: ".mysqli_connect_error());
//     }
 
    $query = "SELECT SN, Fname, Lname, PN FROM student";
    $results = mysqli_query($conn, $query);
//     $user = mysqli_fetch_array($results);
    
//     if (mysqli_num_rows($results) > 0){
//         $_SESSION['users'] = array();
//         $_SESSION['users']['SN'] = $user['SN'];
//         $_SESSION['users']['Fname'] = $user['Fname'];
//         $_SESSION['users']['Lname'] = $user['Lname'];
//         $_SESSION['users']['PN'] = $user['PN'];

//         header('location: firstpage.php');
//     }
// }
?>
<?php if (isset($_SESSION['users'])):?>
<strong><?php echo "Welcome ".$_SESSION['users']['SN'];?>
<?php endif ?>

<table border = "1">
    <tr>
        <td>Student Number</td>
        <td>Fname</td>
        <td>Lname</td>
        <td>Phone Number</td>
    </tr>
    <?php
        while ($row = mysqli_fetch_array($results)) {?>
            <tr>
            <td><?php echo $row['SN'];?></td>
            <td><?php echo $row['Fname'];?></td>
            <td><?php echo $row['Lname'];?></td>
            <td><?php echo $row['PN'];?></td>
            </tr>
    <?php  } ?>
</table>

