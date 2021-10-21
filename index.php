<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>
<body>

    <?php
    //bước 1
    $conn=mysqli_connect('localhost','root','','project03','3306');
    if(!$conn)
    {
        die("Kết nối không thành công");
    }
    //bước 2
    $sql="SELECT* FROM db_employees";
    $result=mysqli_query($conn,$sql);
    //Buocsw 3
    echo"<table border='1'>";
    echo"<tr>";
    echo"<th>Mã NV</th>";
    echo"<th>Tên nhân viên</th>";
    echo"<th>Chức vụ</th>";
    echo"<th>Điện thoại</th>";
    echo"<th>Số di động</th>";
    echo"<th>Email</th>";
    echo"<th>Mã Văn phòng</th>";

    echo"</tr>";
    if(mysqli_num_rows($result)){
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo"<td>".$row['emp_id']."</td>";
            echo"<td>".$row['emp_name']."</td>";
            echo"<td>".$row['emp_position']."</td>";
            echo"<td>".$row['emp_phone']."</td>";
            echo"<td>".$row['emp_mobile']."</td>";
            echo"<td>".$row['emp_email']."</td>";
            echo"<td>".$row['office_id']."</td>";
            echo "</tr>";
        }
    }
    echo"</table>";
    //buoc4
    mysqli_close($conn);
    ?>
     
</body>
</html>