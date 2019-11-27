<?php include('connection.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main0" />
    
</head>
<body>
<div class="header">
<h2>Login</h2>
</div>
    <form method='POST' action='login.php'>
        
        <div class="input-group">
        Student Number: <input type='number' name='studentid' autocomplete="off"><br><br>
        </div>
        <div class="input-group">
        Password: <input type='password' name='password' autocomplete="off"><br><br>
        </div>
        
        <select name = "selected">
            <option value="Student">Student</option>
            <option value="Professor">Professor</option>
            <option value="Admin">Admin</option>
        </select>
        <div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
        <P>
             <a href="" style="color: #CCCC00">Forgot Password</a><br>
            
        </P>
    </form>
</body>
</html>
