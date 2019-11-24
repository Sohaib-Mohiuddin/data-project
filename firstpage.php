<?php
include('connection.php');
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "SN: " . $row["SN"]. " First Name: " . $row["Fname"]. "Last Name: " . $row["Lname"]. "DoB: " . $row["DoB"]. "PN: " . $row["PN"]. "Email: " . $row["Email"]. "Major: " . $row["Major"]. "<br>";
    }
} else {
    echo "0 results";
}
?>