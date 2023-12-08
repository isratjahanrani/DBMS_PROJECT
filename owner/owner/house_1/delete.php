<?php
 include ("connection.php");
 if (isset($_GET['deleteid'])) {
    $id = $_GET ['deleteid'];
    $sql = "delete from `house` where id = $id";
    $result =mysqli_query($conn,$sql);
    if ($result) {
        header('location:doo.php');
    }
    else {
        die(mysqli_error($con));
    }
 }
?>