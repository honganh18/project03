<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Office</title>
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
    $sql="SELECT* FROM db_office";
    $result=mysqli_query($conn,$sql);
    //buowcs3
    
    echo"<table border='1'>";
    echo"<tr>";
    echo"<th>Mã Văn Phòng</th>";
    echo"<th>Tên Văn Phòng</th>";
    echo"<th>Điện thoại</th>";
    echo"<th>Email</th>";
    echo"<th>Website</th>";
    echo"<th>Email</th>";
    echo"<th>Địa chỉ</th>";
    echo"<th>Trực thuộc</th>";
    echo"</tr>";
    if(mysqli_num_rows($result)){
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo"<td>".$row['office_id']."</td>";
            echo"<td>".$row['office_name']."</td>";
            echo"<td>".$row['office_phone']."</td>";
            echo"<td>".$row['office_email']."</td>";
            echo"<td>".$row['office_website']."</td>";
            echo"<td>".$row['office_address']."</td>";
            echo"<td>".$row['office_parent']."</td>";
            echo "</tr>";
        }
    }
    echo"</table>";
    
    ?>
   
</body>
</html>