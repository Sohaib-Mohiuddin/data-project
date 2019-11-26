<link rel="stylesheet" type="text/css" href="style.css">
<script src = student_functions.js></script>
<?php 
    include('connection.php');  
    $id = $_SESSION['users']['SN'];
    $query = "";
    $results = mysqli_query($conn, $query);
?>
<?php if (isset($_SESSION['users'])):?>
<strong><?php echo "Welcome ".$_SESSION['users']['SN'];?>
<?php endif ?>

<div class="tab">
    <button class="tablinks" onclick="openCity(event, 'student_homepage')">Home</button>
    <button class="tablinks" onclick="openCity(event, 'student_profile')">Profile</button>
    <button class="tablinks" onclick="openCity(event, 'student_grades')">Grades</button>
    <button class="tablinks" onclick="openCity(event, 'student_review')">Reviews</button>
    <!-- <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button> -->
</div>

<br><br><br>

<table>
    <thead>
        <tr>
            <th>Course Name</th>
            <th>CRN</th>
            <th>Professor Name</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['Cname'];?></td>
            <td><?php echo $row['CRN'];?></td>
            <td><?php echo $row['Fname'] . " " . $row['Lname'];?></td>
        </tr>
    <?php } ?>
</table>