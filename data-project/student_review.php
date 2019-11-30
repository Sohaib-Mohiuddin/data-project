<!-- This is the student review page, where the student can write reviews for professors and view any ratings they have given to any professors -->
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src = "functions.js"></script>
<?php 
    include('connection.php');  
    $id = $_SESSION['users']['SN'];
    
    // This query displays all the reviews that the student has submitted
    $query1 = "SELECT * FROM review WHERE SN = '$id'";
    $results1 = mysqli_query($conn, $query1);

    // This query displays the names of the professors that have a rating of 3
    $query2 = "SELECT Fname, Lname FROM professor WHERE Profno = ANY(SELECT Profno FROM review WHERE Rating = 3) GROUP BY Fname";
    $results2 = mysqli_query($conn, $query2);

    if (isset($_POST['student_review_submit'])) {
        $student_review_rating = mysqli_real_escape_string($conn, $_POST['student_review_rating']);
        $student_review_profno = mysqli_real_escape_string($conn, $_POST['student_review_profno']);
        $student_review_crn = mysqli_real_escape_string($conn, $_POST['student_review_crn']);

        $query0 = "INSERT INTO review (SN, Rating, Profno, CRN) VALUES ('$id', '$student_review_rating', '$student_review_profno', '$student_review_crn')";
        $results0 = mysqli_query($conn, $query0);
        if ($results0 === TRUE) {
            $insertresult = "<p>Professor Rating Successfully Submitted!</p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }        
        header('location: student_review.php');
    }
?>
<?php if (isset($_SESSION['users'])):?>
<strong><?php echo "Welcome ".$_SESSION['users']['SN'];?>
<?php endif ?>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" onclick="openPage(event, 'student_homepage')">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" onclick="openPage(event, 'student_profile')">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" onclick="openPage(event, 'student_grades')">Grades</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" onclick="openPage(event, 'student_review')">Reviews</a>
  </li>
</ul>

<br><br><br>

<form method='POST' action='student_review.php'>
    <div class="input-group col-lg-3">
        <span class="input-group-addon" id="basic-addon1">Student Number: &nbsp;&nbsp;</span>
        <input type="number" name="student_review_sn" min="40000000" max="49999999" class="form-control" placeholder="<?php echo($id); ?>" aria-describedby="basic-addon1" readonly>
    </div>

    <br>

    <div class="input-group col-lg-3">
        <span class="input-group-addon" id="basic-addon1">Rating: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <input type="number" name="student_review_rating" min="1" max="5" class="form-control" placeholder="Pick a Number Between 1 and 5" aria-describedby="basic-addon1">
    </div>
    
    <br>
    
    <div class="input-group col-lg-3">
        <span class="input-group-addon" id="basic-addon1">Professor Number:</span>
        <input type="number" name="student_review_profno" min="10000000" max="19999999" class="form-control" placeholder="100xxxxx" aria-describedby="basic-addon1">
    </div>
    
    <br>
    
    <div class="input-group col-lg-3">
        <span class="input-group-addon" id="basic-addon1">CRN: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <input type="number" name="student_review_crn" class="form-control" placeholder="90834" aria-describedby="basic-addon1">
    </div>

    <br>

    <div class="input-group">
        <button type="submit" name="student_review_submit" class="btn btn-primary btn-lg btn-block">Submit Rating</button>
    </div>

    <br>
</form>

<br><br><br>

<p>Student Ratings for Professors</p>
<table class = "table">
    <thead>
        <tr>
            <th>Student Number</th>
            <th>Rating</th>
            <th>Prof Number</th>
            <th>CRN</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($results1)) { ?>
        <tr>
            <td><?php echo $row['SN'];?></td>
            <td><?php echo $row['Rating'];?></td>
            <td><?php echo $row['Profno'];?></td>
            <td><?php echo $row['CRN'];?></td>
        </tr>
    <?php } ?>
</table>

<br><br><br>

<p>Professors with a Rating of 3</p>
<table class = "table">
    <thead>
        <tr>
            <th>Professor Name</th>
        </tr>
    </thead>
    <?php while ($row1 = mysqli_fetch_array($results2)) { ?>
        <tr>
            <td><?php echo $row1['Fname'] . " " . $row1['Lname'];?></td>
        </tr>
    <?php } ?>
</table>
