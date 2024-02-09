<?php
    include './connection.php';
    if($_POST)
    {
        $name = $_POST['txt1'];
        $gender = $_POST['txt2'];
        $mobile = $_POST['txt3'];
        $q = mysqli_query($connection,"insert into tbl_emp(emp_name,emp_gender,emp_mobile) values('$name','$gender','$mobile')");
        if($q)
        {
            echo "<script>alert('Record Added');</script>";
        }
    }
?>
<html>
    <body>
        <form method="post">
        Name : <input type="text" name="txt1" placeholder="Enter Name" required />
        Gender : <input type="text" name="txt2" placeholder="Enter Gender" required />
        Mobile : <input type="text" name="txt3" placeholder="Enter Mobile" required />
        <input type ="submit" value="Add">
        </form>
    </body>
</html>

