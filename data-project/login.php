<?php include('connection.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main0" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src = "functions.js"></script>
    </head>
    <body>
    <div class="header">
        <h2>Login</h2>
    </div>
    <form method='POST' action='login.php'>

        <!-- <div class="input-group col-lg-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">ID:</span>
            </div>
            <input type="number" name='studentid' autocomplete="off" max = "99999999" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div> -->

        <div class="input-group col-lg-3">
            <span class="input-group-addon" id="basic-addon1">ID: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <input type="number" name='studentid' autocomplete="off" max = "99999999" class="form-control" aria-describedby="basic-addon1">
        </div>

        <br>

        <!-- <div class="input-group mb-3 col-lg-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Password:</span>
            </div>
            <input type='password' name='password' autocomplete="off" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div> -->

        <div class="input-group col-lg-3">
            <span class="input-group-addon" id="basic-addon1">Password:</span>
            <input type='password' name='password' autocomplete="off" class="form-control" aria-describedby="basic-addon1">
        </div>
        
        <br>

        <select name= "dropdown">
            <option value=" ">          </option>
            <option value="student">Student</option>
            <option value="professor">Professor</option>
            <option value="admin">Admin</option>
        </select>
        
        <!-- <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
            <span class="caret"></span></button>
            <ul class="dropdown-menu" name="dropdown">
                <li><a value="student">Student</a></li>
                <li><a value="professor">Professor</a></li>
                <li><a value="admin">Admin</a></li>
            </ul>
        </div> -->

        <br><br>

        <div class="input-group">
  		    <button type="submit" class="btn" name="login_user">Login</button>
  	    </div>
        <P>
             <a href="" style="color: #CCCC00">Forgot Password</a><br>
            
        </P>
    </form>
</body>
</html>
