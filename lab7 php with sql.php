<!DOCTYPE html>
<html>
<body>
<h2>Lab 7 assignment</h2>
<p>Lab 7 PHP with SQL:</p>
<p>1. Shell access to your Raspberry Pi, already done,it's in mini lab report</p>
<p>2. The database lab6 already created and configured for use with my web site as per last lab </p>


<?php
$servername = "localhost";
$username = "yan";
$password = "bryan2018";
$dbname = "lab6";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT name, breed, color, age FROM dogs";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "name: " . $row["name"]. " - breed: " . $row["breed"]." - color: " . $row["color"]." - age: " . $row["age"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>
