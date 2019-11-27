<link rel="stylesheet" type="text/css" href="style.css">
<script src = functions.js></script>
<?php 
    include('connection.php');  
    $id = $_SESSION['users']['Profno'];
    $query = "SELECT Rating, CRN FROM review WHERE Profno = '$id'";
    $results = mysqli_query($conn, $query);
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

<p>Student Ratings</p>
<table>
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