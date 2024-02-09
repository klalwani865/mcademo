<?php
include './connection.php';

$id = $_GET['eid'];
$selectq = mysqli_query($connection,"select * from tbl_emp where emp_id='{$id}'");
$row = mysqli_fetch_array($selectq);

if($_POST)
{
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $mobile = $_POST['txt3'];
    $uq =  mysqli_query($connection,"update tbl_emp set emp_name='{$name}',emp_gender='{$gender}',emp_mobile='{$mobile}' where emp_id='{$id}'");
    if($uq){
        echo "<script>alert('Record Updated');window.location='display-employee.php'</script>";
    }
}

?>
<html>
    <body>
        <form method="post">
        Name : <input type="text" value ="<?php echo $row['emp_name']; ?>" name="txt1" placeholder="Enter Name" required />
        Gender : <input type="text" value ="<?php echo $row['emp_gender']; ?>" name="txt2" placeholder="Enter Gender" required />
        Mobile : <input type="text" value ="<?php echo $row['emp_mobile']; ?>" name="txt3" placeholder="Enter Mobile" required />
        <input type ="submit" value="Update">
        </form>
    </body>
</html>
