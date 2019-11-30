<!-- This is the students grade page where students can view their grades -->

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src = "functions.js"></script>
<?php 
    include('connection.php');  
    $id = $_SESSION['users']['SN'];

    //This query returns all grades from all courses that student is taking
    $query = "SELECT S.SN, Cname, Grade FROM student S JOIN grades G ON G.SN = S.SN JOIN courses C ON C.CRN = G.CRN WHERE S.SN = '$id'";
    $results = mysqli_query($conn, $query);
?>
<?php if (isset($_SESSION['users'])):?>
<strong><?php echo "Welcome ".$_SESSION['users']['SN'];?>
<?php endif ?>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" onclick="openPage(event, 'student_homepage')">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" onclick="openPage(event, 'student_profile')">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" onclick="openPage(event, 'student_grades')">Grades</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" onclick="openPage(event, 'student_review')">Reviews</a>
  </li>
</ul>

<br><br><br>

<table class = "table">
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
