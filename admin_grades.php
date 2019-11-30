<!-- This is the admins grades page. The admin can check the statistics of the grades in the system as well as manage them -->
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src = "functions.js"></script>
<?php 
    include('connection.php');  
    $id = $_SESSION['users']['Ano'];
    
    // query1 selects all the students with a grade of more than 80 that are not in engineering 
    $query1 = "SELECT Fname, Lname, Grade FROM student S, grades G WHERE (S.SN = G.SN AND Grade > 80) NOT IN(SELECT Fname FROM student S WHERE S.Major = 'Engineering')";
    $results1 = mysqli_query($conn, $query1);
    
    // query2 selects all students grades where the major is engineering
    $query2 = "SELECT G.SN, G.CRN, G.Grade, S.Fname, S.Lname FROM grades G, student S WHERE G.SN = S.SN AND S.Major = \"Engineering\"";
    $results2 = mysqli_query($conn, $query2);
    
    // query3 returns a table with all students and their grades
    $query3 = "SELECT S.SN, S.Fname, S.Lname, G.Grade FROM student S LEFT JOIN grades G ON S.SN = G.SN UNION SELECT S.SN, S.Fname, S.Lname, G.Grade FROM student S RIGHT JOIN grades G ON S.SN = G.SN";
    $results3 = mysqli_query($conn, $query3);
    
    // query4 selects all students where major is engineering
    $query4 = "SELECT Fname, Lname, SN FROM student WHERE Major = \"Engineering\"";
    $results4 = mysqli_query($conn, $query4);
?>
<?php if (isset($_SESSION['users'])):?>
<strong><?php echo "Welcome ". $id;?>
<?php endif ?>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" onclick="openPage(event, 'admin_homepage')">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" onclick="openPage(event, 'admin_profile')">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" onclick="openPage(event, 'admin_grades')">Grades</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" onclick="openPage(event, 'admin_review')">Reviews</a>
  </li>
</ul>

<br><br><br>

<p>Students Grades</p>
<table class = "table">
    <thead>
        <tr>
            <th>Student Name</th>
            <th>Grade</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($results1)) { ?>
        <tr>
            <td><?php echo $row['Fname'] . " " . $row['Lname'];?></td>
            <td><?php echo $row['Grade'];?></td>
        </tr>
    <?php } ?>
</table>

<br><br><br>

<p>Students Grades in engineering</p>
<table class = "table">
    <thead>
        <tr>
            <th>Student Number</th>
            <th>CRN</th>
            <th>Grade</th>
            <th>Student Name</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($results2)) { ?>
        <tr>
            <td><?php echo $row['SN']?></td>
            <td><?php echo $row['CRN'];?></td>
            <td><?php echo $row['Grade'];?></td>
            <td><?php echo $row['Fname'] . " " . $row['Lname'];?></td>
        </tr>
    <?php } ?>
</table>

<br><br><br>

<p>Student Information with grades</p>
<table class = "table">
    <thead>
        <tr>
            <th>Student Number</th>
            <th>Student Name</th>
            <th>Grade</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($results3)) { ?>
        <tr>
            <td><?php echo $row['SN']?></td>
            <td><?php echo $row['Fname'] . " " . $row['Lname'];?></td>
            <td><?php echo $row['Grade'];?></td>
        </tr>
    <?php } ?>
</table>

<br><br><br>

<p>Student Information of those that are in Engineering</p>
<table class = "table">
    <thead>
        <tr>
            <th>Student Name</th>
            <th>Student Number</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($results4)) { ?>
        <tr>
            <td><?php echo $row['Fname'] . " " . $row['Lname'];?></td>
            <td><?php echo $row['SN']?></td>
        </tr>
    <?php } ?>
</table>
