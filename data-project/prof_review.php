<!-- This is the prof review page where they can see all reviews occuring -->

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src = "functions.js"></script>
<?php 
    include('connection.php');  
    $id = $_SESSION['users']['Profno'];

    //query selects all the reviews for the course that the prof is teaching and displays them
    $query = "SELECT Rating, CRN FROM review WHERE Profno = '$id'";
    $results = mysqli_query($conn, $query);
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
    <a class="nav-link" onclick="openPage(event, 'prof_grades')">Grades</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" onclick="openPage(event, 'prof_review')">Reviews</a>
  </li>
</ul>

<br><br><br>

<p>Student Ratings</p>
<table class = "table">
    <thead>
        <tr>
            <th>Rating</th>
            <th>CRN</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['Rating'];?></td>
            <td><?php echo $row['CRN'];?></td>
        </tr>
    <?php } ?>
</table>
