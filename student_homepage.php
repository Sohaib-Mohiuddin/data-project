<link rel="stylesheet" type="text/css" href="style.css">
<script src = student_functions.js></script>
<?php 
    include('connection.php');  
    $id = $_SESSION['users']['SN'];
    $query = "SELECT E.Cname, E.CRN, P.Fname, P.Lname FROM enrolled_in E, courses C, professor P WHERE E.SN = '$id' AND E.Cname = C.Cname AND C.Profno = P.Profno";
    $results = mysqli_query($conn, $query);
?>
<?php if (isset($_SESSION['users'])):?>
<strong><?php echo "Welcome " . $_SESSION['users']['Fname'] . " " . $_SESSION['users']['Lname'];?>
<?php endif ?>

<div class="tab">
    <button class="tablinks" onclick="openPage(event, 'student_homepage')">Home</button>
    <button class="tablinks" onclick="openPage(event, 'student_profile')">Profile</button>
    <button class="tablinks" onclick="openPage(event, 'student_grades')">Grades</button>
    <button class="tablinks" onclick="openPage(event, 'student_review')">Reviews</button>
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
            <th>Course Name</th>
            <th>CRN</th>
            <th>Professor Name</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['Cname'];?></td>
            <td><?php echo $row['CRN'];?></td>
            <td><?php echo $row['Fname'] . " " . $row['Lname'];?></td>
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