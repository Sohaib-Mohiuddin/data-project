<?php
include('connection.php');

$sql = "SELECT * FROM student";
$result = $conn->query($sql);
?>
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

    <?php
        while ($row = mysqli_fetch_array($result)) {?>
            <tr>
            <td><?php echo $row['SN'];?></td>
            <td><?php echo $row['Fname'];?></td>
            <td><?php echo $row['Lname'];?></td>
            <td><?php echo $row['DoB'];?></td>
            <td><?php echo $row['PN'];?></td>
            <td><?php echo $row['Email'];?></td>
            <td><?php echo $row['Major'];?></td>
            </tr>
    <?php  } ?>
</table>