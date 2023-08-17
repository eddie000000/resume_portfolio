<?
	include('mysqli_obj_connMysql.php');
	$sql_query = "SELECT * FROM booklist ORDER BY bookID ASC";
	$result = $db_link->query($sql_query);
	$total = $result->num_rows;

?>
<!DOCTYPE html>
<html>
<head>
<style>
.buttonu{
  background-color: white;
  color: black;
  border: 1px solid #555555;
}

.buttonu:hover {
  background-color: #1a1aff;
  color: white;
}
.buttond{
  background-color: white;
  color: black;
  border: 1px solid black;
}

.buttond:hover {
  background-color: red;
  color: white;
}
a 
{
 text-decoration: none; 
}
*
{
	margin: 0 auto;
}
table 
{
  border-spacing: 3px;
}
h1,p
{
	text-align:center;
}
table,tr,th,td
{
	border :1px solid black;
}
th
{
	background-color : pink;
}


</style>
<title>書籍管理後台</title>
</head>
<body>
<h1>書籍管理後台</h1>
	<p>目前資料筆數:<?php echo $total; ?><input type="button" value ="新增書目" onclick ="location.href='add.php'"></p>
	<table>
		<tr>
			<th>書名</th>
			<th>價格</th>
			<th>剩餘數量</th>
			<th>分類</th>
			<th>出版日期</th>
			<th>作者</th>
			<th>點擊次數</th>
			<th>圖片</th>
			<th>修改/刪除</th>
		</tr>

<?php
	while($row_result = $result->fetch_assoc())
	{
		echo "<tr><td>".$row_result['bookName']."</td><td>".$row_result['bookPrice']."</td><td>".$row_result['bookLeft']."</td><td>".$row_result['bookCatagory']."</td><td>".$row_result['bookPublishD']."</td><td>".$row_result['bookAuthor']."</td><td>".$row_result['bookClick']."</td>";
		echo "<td>"."<a href=".$row_result['bookPic']."><img src=".$row_result['bookPic']." border=0 width=100px height=100px></a>"."</td>";
		echo "<td><a href='update.php?id=".$row_result['bookID']."' class='buttonu'>修改 </a>";
		echo "<a href='delete.php?id=".$row_result['bookID']."' class='buttond'>刪除</a></td></tr>";
	}
?>
		</table>
		<p>This Web page is inspired by <a href="https://www.168books.com.tw/">168books</a></p>
</body>
</html>
<?php
	$db_link->close();
?>