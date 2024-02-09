<script>
    function confirmDelete(){
        return confirm("Are you sure");
    }
</script>
<?php
    include './connection.php';

    if(isset($_GET['did']))
    {
        $did = $_GET['did'];
        $dq = mysqli_query($connection,"delete from tbl_emp where emp_id='{$did}'");
        if($dq)
        {
            echo "<script>alert('Record Deleted');</script>";
        }
    }
    $q = mysqli_query($connection,"select * from tbl_emp");

    $count = mysqli_num_rows($q);
    echo "$count Record Found";
    
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Gender</th>";
    echo "<th>Mobile</th>";
    echo "<th>Action</th>";
    echo "</tr>";
    while($row = mysqli_fetch_array($q)){
        echo "<tr>";
        echo "<th>{$row['emp_id']}</th>";
        echo "<td>{$row['emp_name']}</td>";
        echo "<td>{$row['emp_gender']}</td>";
        echo "<td>{$row['emp_mobile']}</td>";
        echo "<td><a href='edit-employee.php?eid={$row['emp_id']}'>Edit</a> |<a href='display-employee.php?did={$row['emp_id']}' onclick='return confirmDelete()'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";