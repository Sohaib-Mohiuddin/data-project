<link rel="stylesheet" type="text/css" href="style.css">
<script src = functions.js></script>
<?php 
    include('connection.php');  
    $id = $_SESSION['users']['Profno'];

    $query1 = "SELECT Grade, Fname, Lname FROM grades G, student S WHERE S.SN = G.SN AND Grade > (SELECT avg(GRADE) FROM GRADES WHERE G.SN = S.SN)";
    $results1 = mysqli_query($conn, $query1);

    $query2 = "SELECT S.SN FROM student S, grades G WHERE grade < 50 AND S.SN = G.SN";
    $results2 = mysqli_query($conn, $query2);
?>
<?php if (isset($_SESSION['users'])):?>
<strong><?php echo "Welcome ".$_SESSION['users']['Profno'];?>
<?php endif ?>

<div class="tab">
    <button class="tablinks" onclick="openPage(event, 'prof_homepage')">Home</button>
    <button class="tablinks" onclick="openPage(event, 'prof_profile')">Profile</button>
    <button class="tablinks" onclick="openPage(event, 'prof_grades')">Grades</button>
    <button class="tablinks" onclick="openPage(event, 'prof_review')">Reviews</button>
    <!-- <button class="tablinks" onclick="openPage(event, 'Tokyo')">Tokyo</button> -->
</div>

<br><br><br>

<p>Student Information of those whose grades are less than the avergage grade</p>
<table>
    <thead>
        <tr>
            <th>Grade</th>
            <th>Student Name</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($results1)) { ?>
        <tr>
            <td><?php echo $row['Grade'];?></td>
            <td><?php echo $row['Fname'] . " " . $row['Lname'];?></td>
        </tr>
    <?php } ?>
</table>

<br><br><br>

<p>Student Number of students whose grades are less than 50%</p>
<table>
    <thead>
        <tr>
            <th>Student Number</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($results2)) { ?>
        <tr>
            <td><?php echo $row['SN'];?></td>
        </tr>
    <?php } ?>
</table>