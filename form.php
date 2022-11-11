<?php
$con= new mysqli("localhost","root","","wtlab");
if($con->connect_error)
{
    die("Connection Failed: ");
}

$conn=connectDB();

$sql="INSERT INTO contactus (Name, Gender, Contact, Suggestion) VALUES ('$_GET['name']','$_GET['gender']','$_GET['contact']','$_GET['comment']')";
$result=$conn->query($sql);

echo $sql;

$sql="SELECT * FROM studMaster";
    $result=$conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " - Gender: " . $row["gender"]. " " .  " - Contact: " . $row["contact"]. " " .  " - Suggestion: " . $row["comment"]. " " ."<br>";
      }
    } else {
      echo "0 results";
    }

$conn->close();

?>
