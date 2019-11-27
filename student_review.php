<link rel="stylesheet" type="text/css" href="style.css">
<script src = student_functions.js></script>
<?php 
    include('connection.php');  
    $id = $_SESSION['users']['SN'];

    $query1 = "SELECT * FROM review WHERE SN = '$id'";
    $results1 = mysqli_query($conn, $query1);

    $query2 = "SELECT Fname, Lname FROM professor WHERE Profno = ALL(SELECT Profno FROM review WHERE Rating = 3) GROUP BY Fname";
    $results2 = mysqli_query($conn, $query2);
?>
<?php if (isset($_SESSION['users'])):?>
<strong><?php echo "Welcome ".$_SESSION['users']['SN'];?>
<?php endif ?>

<div class="tab">
    <button class="tablinks" onclick="openPage(event, 'student_homepage')">Home</button>
    <button class="tablinks" onclick="openPage(event, 'student_profile')">Profile</button>
    <button class="tablinks" onclick="openPage(event, 'student_grades')">Grades</button>
    <button class="tablinks" onclick="openPage(event, 'student_review')">Reviews</button>
    <!-- <button class="tablinks" onclick="openPage(event, 'Tokyo')">Tokyo</button> -->
</div>

<br><br><br>

<p>Student Ratings for Professors</p>
<table>
    <thead>
        <tr>
            <th>Student Number</th>
            <th>Rating</th>
            <th>Prof Number</th>
            <th>CRN</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($results1)) { ?>
        <tr>
            <td><?php echo $row['SN'];?></td>
            <td><?php echo $row['Rating'];?></td>
            <td><?php echo $row['Profno'];?></td>
            <td><?php echo $row['CRN'];?></td>
        </tr>
    <?php } ?>
</table>

<br><br><br>

<p>Professors with a Rating of 3</p>
<table>
    <thead>
        <tr>
            <th>Professor Name</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($results2)) { ?>
        <tr>
            <td><?php echo $row['Fname'] . " " . $row['Lname'];?></td>
        </tr>
    <?php } ?>
</table>