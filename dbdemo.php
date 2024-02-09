<?php

$connection = mysqli_connect("localhost", "root", "","mca24");

$query = mysqli_query($connection, "insert into tbl_student (st_name,st_gender) values('Baldev','Male')") or die("Error ". mysqli_error($connection));

if($query)
{
    echo "<script>alert('Record Inserted');</script>";
}