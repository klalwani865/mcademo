<?php

$a = $_POST['txt1'];
$b = $_POST['txt2'];

echo "Name is $a and Gender is $b";

$connection = mysqli_connect("localhost", "root", "","mca24");

$query = mysqli_query($connection, "insert into tbl_student (st_name,st_gender) values('$a','$b')") or die("Error ". mysqli_error($connection));

if($query)
{
    echo "<script>alert('Record Inserted');</script>";
}