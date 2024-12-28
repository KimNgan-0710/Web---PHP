<?php include "header.php";?>
<h1>Danh sách Tour</h1>
	
<?php
include 'connect.php';
$sql = "SELECT id, name, price FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Hiển thị dữ liệu
    while ($row = $result->fetch_assoc()) {

        echo "ID: " . $row["id"] . "<br>";
        echo " Tên sản phẩm: " . $row["name"] . "<br>";
        echo " Giá: " . $row["price"] . "<br>";
    }
} else {
    echo "Không có sản phẩm nào trong cơ sở dữ liệu.";
}
?>
<?php include "footer.php";?>