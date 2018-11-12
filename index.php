<html>
<title>游戏列表</title>
<?php
$servername = "localhost";
$username = "test";
$password = "123456";
$dbname = "test";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "SELECT ID, Name FROM games";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"]. " - Name: " . $row["Name"]. " " . "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();
?>
</html>
