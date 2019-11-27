<link rel="stylesheet" type="text/css" href="style.css">
<script src = functions.js></script>
<?php 
    include('connection.php');  
    $id = $_SESSION['users']['Profno'];
    $query = "SELECT CRN, Department, Cname FROM courses WHERE Profno = '$id'";
    $results = mysqli_query($conn, $query);
?>
<?php if (isset($_SESSION['users'])):?>
<strong><?php echo "Welcome " . $id;?>
<?php endif ?>

<div class="tab">
    <button class="tablinks" onclick="openPage(event, 'prof_homepage')">Home</button>
    <button class="tablinks" onclick="openPage(event, 'prof_profile')">Profile</button>
    <button class="tablinks" onclick="openPage(event, 'prof_grades')">Grades</button>
    <button class="tablinks" onclick="openPage(event, 'prof_review')">Reviews</button>
    <!-- <button class="tablinks" onclick="openPage(event, 'Tokyo')">Tokyo</button> -->
</div>

<br><br><br>

<div style = "display:inline-block;">
    <input type = "button" value = "A" href = "#A">
    <input type = "button" value = "B" href = "#B">
</div>

<br><br><br>

<table class = "table">
    <thead>
        <tr>
            <th>CRN</th>
            <th>Department</th>
            <th>Course Name</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['CRN'];?></td>
            <td><?php echo $row['Department'];?></td>
            <td><?php echo $row['Cname'];?></td>
        </tr>
    <?php } ?>
</table>

<form>
    <p>A</p>
    <select id = "A">
        <option value="Query">Query</option>
        <option value="Query">Query</option>
        <option value="Query">Query</option>
        <option value="Query">Query</option>
    </select>
    <p>B</p>
    <select id = "B">
        <option value="Query">Query</option>
        <option value="Query">Query</option>
        <option value="Query">Query</option>
        <option value="Query">Query</option>
    </select>
</form>

<p><a href = "login.php" class = "logout">Logout</a></P>