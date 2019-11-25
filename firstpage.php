<?php
include('connection.php');
?>
 <?php if (isset($_SESSION['users'])):?>
 <?php if (isset($_SESSION['resultt'])):?>
<strong><?php echo "Welcome ".$_SESSION['users']['SN'];?>
<?php endif ?>


<table border = "1">
    <tr>
        <td>Student Number</td>
        <td>CRN</td>
        <td>Course Name</td>
    </tr>

    <?php
    while (mysqli_fetch_array($_SESSION['resultt'])) {?>
    <tr>
        <td><?php echo $_SESSION['users']['SN'];?></td>
        <td><?php echo $_SESSION['users']['CRN'];?></td>
        <td><?php echo $_SESSION['users']['Cname'];?></td>
    </tr>
    <?php } ?>
</table>