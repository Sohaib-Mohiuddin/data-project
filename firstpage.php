<?php
include('connection.php');
?>
 <?php if (isset($_SESSION['users'])):?>
<strong><?php echo "Welcome ".$_SESSION['users']['Fname']." ".$_SESSION['users']['Lname'];?>

<?php endif ?>


<table border = "1">
    <tr>
        <td>SN</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Date of Birth</td>
        <td>Phone Number</td>
        <td>Email</td>
        <td>Major</td>
    </tr>
    
        <tr>
            <td><?php echo $_SESSION['users']['SN'];?></td>
            <td><?php echo $_SESSION['users']['Fname'];?></td>
            <td><?php echo $_SESSION['users']['Lname'];?></td>
            <td><?php echo $_SESSION['users']['Dob'];?></td>
            <td><?php echo $_SESSION['users']['PN'];?></td>
            <td><?php echo $_SESSION['users']['Email'];?></td>
            <td><?php echo $_SESSION['users']['Major'];?></td>
            </tr>
    
      
</table>