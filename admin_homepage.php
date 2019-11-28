<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src = "functions.js"></script>
<?php 
    include('connection.php');  
    $id = $_SESSION['users']['Ano'];
?>
<?php if (isset($_SESSION['users'])):?>
<strong><?php echo "Welcome " . $id;?>
<?php endif ?>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" onclick="openPage(event, 'admin_homepage')">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" onclick="openPage(event, 'admin_profile')">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" onclick="openPage(event, 'admin_grades')">Grades</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" onclick="openPage(event, 'admin_review')">Reviews</a>
  </li>
</ul>

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

<p><a href = "login.php" class = "logout">Logout</a></P>