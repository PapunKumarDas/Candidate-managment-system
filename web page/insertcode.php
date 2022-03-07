<link rel="stylesheet" type="text/css" href="databasecss.css">
<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'candidate');

if(isset($_POST['insertdata']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $query = "INSERT INTO table1 (`fname`,`lname`,`email`,`contact`) VALUES ('$fname','$lname','$email','$contact')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>


