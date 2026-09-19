<?php

include "connect.php";

$fullname = $_POST['fullname'];
$age = $_POST['age'];
$case_type = $_POST['case_type'];
$description = $_POST['description'];
$location = $_POST['location'];

$sql = "INSERT INTO reports(fullname, age, case_type, description, location)

VALUES('$fullname', '$age', '$case_type', '$description', '$location')";

if(mysqli_query($conn, $sql)) {

    echo "Report submitted successfully";

} else {

    echo "Error";

}

?>