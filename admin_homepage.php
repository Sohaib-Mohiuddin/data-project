<link rel="stylesheet" type="text/css" href="style.css">
<script src = functions.js></script>
<?php 
    include('connection.php');  
    $id = $_SESSION['users']['Ano'];
?>
<?php if (isset($_SESSION['users'])):?>
<strong><?php echo "Welcome " . $id;?>
<?php endif ?>

<div class="tab">
    <button class="tablinks" onclick="openPage(event, 'admin_homepage')">Home</button>
    <button class="tablinks" onclick="openPage(event, 'admin_profile')">Profile</button>
    <button class="tablinks" onclick="openPage(event, 'admin_grades')">Grades</button>
    <button class="tablinks" onclick="openPage(event, 'admin_review')">Reviews</button>
    <!-- <button class="tablinks" onclick="openPage(event, 'Tokyo')">Tokyo</button> -->
</div>

<br><br><br>

<div style = "display:inline-block;">
    <input type = "button" value = "A" href = "#A">
    <input type = "button" value = "B" href = "#B">
</div>

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