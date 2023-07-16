<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Profile</title>
    </head>
    <body>
        <h1>Your information: </h1>
    </body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    echo "Name: " . $_POST['name'];
    echo '<br>';
    echo "Date of birth: " . $_POST['dob'];
    echo '<br>';
    echo "Email: " . $_POST['email'];
    echo '<br>';
    echo "Gender: " . $_POST['gender'];
    echo '<br>';
}
?>