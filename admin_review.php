<!-- This is the admin review page. The admin can view the reviews that are happenning on the system -->
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src = "functions.js"></script>
<?php 
    include('connection.php');  
    $id = $_SESSION['users']['Ano'];

    // query that selects the students and grades greater than 80 percent whos major is not engineering 
    $query = "SELECT Fname, Lname, Grade FROM student S, grades G WHERE (S.SN = G.SN AND Grade > 80) NOT IN(SELECT Fname FROM student S WHERE S.Major = 'Engineering')";
    $results = mysqli_query($conn, $query);
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
    <a class="nav-link" onclick="openPage(event, 'admin_grades')">Grades</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" onclick="openPage(event, 'admin_review')">Reviews</a>
  </li>
</ul>

<br><br><br>

<p>Student grades over 80% that are not in engineering</p>
<table class = "table">
    <thead>
        <tr>
            <th>Student Name</th>
            <th>Grade</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['Fname'] . " " . $row['Lname'];?></td>
            <td><?php echo $row['Grade'];?></td>
        </tr>
    <?php } ?>
</table>
