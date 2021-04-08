<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

//php7
mysqli_query($conn, "set character set 'utf8'");//读库 
mysqli_query($conn,"set names 'utf8'");//写库

?>