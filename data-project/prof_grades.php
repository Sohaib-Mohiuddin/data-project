<!-- This page allows professors to view the grades for the courses they are teaching. Manim=pulating of grades will be added in the future -->

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src = "functions.js"></script>
<?php 
    include('connection.php');  
    $id = $_SESSION['users']['Profno'];

    // query1 Displays all students whos grades are greater than the average grade
    $query1 = "SELECT Grade, Fname, Lname FROM grades G, student S WHERE S.SN = G.SN AND Grade > (SELECT avg(GRADE) FROM GRADES WHERE G.SN = S.SN)";
    $results1 = mysqli_query($conn, $query1);
    
    //query2 Displays the students who's grades are less than 50 percent
    $query2 = "SELECT S.SN FROM student S, grades G WHERE grade < 50 AND S.SN = G.SN";
    $results2 = mysqli_query($conn, $query2);
?>
<?php if (isset($_SESSION['users'])):?>
<strong><?php echo "Welcome ".$_SESSION['users']['Profno'];?>
<?php endif ?>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" onclick="openPage(event, 'prof_homepage')">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" onclick="openPage(event, 'prof_profile')">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" onclick="openPage(event, 'prof_grades')">Grades</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" onclick="openPage(event, 'prof_review')">Reviews</a>
  </li>
</ul>

<br><br><br>

<p>Student Information of those whose grades are greater than the average grade</p>
<table class = "table">
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
<table class = "table">
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
