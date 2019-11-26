<link rel="stylesheet" type="text/css" href="style.css">
<script src = student_functions.js></script>
<?php 
    include('connection.php');  
    $id = $_SESSION['users']['SN'];
    $query = "SELECT S.SN, Cname, Grade FROM student S JOIN grades G ON G.SN = S.SN JOIN courses C ON C.CRN = G.CRN WHERE S.SN = '$id'";
    $results = mysqli_query($conn, $query);
?>
<?php if (isset($_SESSION['users'])):?>
<strong><?php echo "Welcome ".$_SESSION['users']['SN'];?>
<?php endif ?>

<div class="tab">
    <button class="tablinks" onclick="openCity(event, 'student_homepage')">Home</button>
    <button class="tablinks" onclick="openCity(event, 'student_profile')">Profile</button>
    <button class="tablinks" onclick="openCity(event, 'student_grades')">Grades</button>
    <!-- <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button> -->
</div>

<br><br><br>

<table>
    <thead>    
        <tr>
            <th>Student Number</th>
            <th>Course Name</th>
            <th>Grade</td>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td><?php echo $row['SN'];?></td>
                <td><?php echo $row['Cname'];?></td>
                <td><?php echo $row['Grade'] . "%";?></td>
            </tr>
    <?php } ?>
</table>
