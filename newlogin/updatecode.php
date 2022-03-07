<link rel="stylesheet" type="text/css" href="databasecss.css">
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'candidate');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];

        $query = "UPDATE table1 SET fname='$fname', lname='$lname', email='$email', contact=' $contact' WHERE id='$id'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>