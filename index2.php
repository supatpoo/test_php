<?php
// ข้อมูลสำหรับการเชื่อมต่อ MySQL Database
$servername = "localhost"; // เซิร์ฟเวอร์ MySQLsss
$username = "root"; // ชื่อผู้ใช้ MySQL
$password = "root"; // รหัสผ่าน MySQLfdsdfsdfsdfsdf

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $database);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}

// สร้างคำสั่ง SQL เพื่อดึงข้อมูลจากตาราง product
$sql = "SELECT * FROM product";
$result = $conn->query($sql);

// ตรวจสอบว่ามีข้อมูลในตารางหรือไม่
if ($result->num_rows > 0) {
    // ดึงข้อมูลและแสดงผล
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - ชื่อสินค้า: " . $row["value"]  .  " <img src='image/" . $row["path"] . "' style='width:150px;'>";
    }
} else {
    echo "ไม่พบข้อมูลในตาราง product";
}

// ปิดการเชื่อมต่อ
$conn->close();
?>
