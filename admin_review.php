<link rel="stylesheet" type="text/css" href="style.css">
<script src = functions.js></script>
<?php 
    include('connection.php');  
    $id = $_SESSION['users']['Ano'];
    $query = "SELECT Fname, Lname, Grade FROM student S, grades G WHERE (S.SN = G.SN AND Grade > 80) NOT IN(SELECT Fname FROM student S WHERE S.Major = 'Engineering')";
    $results = mysqli_query($conn, $query);
?>
<?php if (isset($_SESSION['users'])):?>
<strong><?php echo "Welcome ". $id;?>
<?php endif ?>

<div class="tab">
    <button class="tablinks" onclick="openPage(event, 'admin_homepage')">Home</button>
    <button class="tablinks" onclick="openPage(event, 'admin_profile')">Profile</button>
    <button class="tablinks" onclick="openPage(event, 'admin_grades')">Grades</button>
    <button class="tablinks" onclick="openPage(event, 'admin_review')">Reviews</button>
</div>

<br><br><br>

<p>Student grades over 80% that are not in engineering</p>
<table>
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