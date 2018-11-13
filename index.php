<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>Games</title>
<body>
<table border="0">
<tr>
<td>网络游戏列表</td>
</tr>
<table boder="0">
<tr>
<hr>
</tr>
<table border="0">
<tr>
<?php
header("content-type: text/html; charset=utf-8");
$servername = "localhost";
$username = "test";
$password = "123456";
$dbname = "test";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "SELECT ID, Name, Type, Dev, Agent, Date FROM games";
$result = $conn->query($sql);
mysql_query('set names utf8');

if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "ID: " .  $row["ID"]. " | 名称: " . $row["Name"]. " | 类型: " . $row["Type"]. " | 开发商: " . $row["Dev"]. " | 代理商: " . $row["Agent"]. " | 发型日期: " . $row["Date"].  "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();
?>
</tr>
</table>
</body>
</html>
