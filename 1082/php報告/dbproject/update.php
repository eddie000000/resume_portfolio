<?
	include("mysqli_obj_connMysql.php");
	if(isset($_POST['action']) && ($_POST['action'] == 'update'))
	{
		$sql_query = "UPDATE booklist SET bookName=?, bookPrice=?, bookLeft=?, bookCatagory=?, bookPublishD=?, bookAuthor=?, bookClick=?, bookPic=? WHERE bookID=?";
		$stmt = $db_link->prepare($sql_query);
		$stmt -> bind_param("siisssisi",$_POST['bookName'],$_POST['bookPrice'],$_POST['bookLeft'],$_POST['bookCatagory'],$_POST['bookPublishD'],$_POST['bookAuthor'],$_POST['bookClick'],$_POST['bookPic'],$_POST['bookID']);
		$stmt -> execute();
		$stmt -> close();
		$db_link->close();
		header("location: data.php");
	}
	$sql_select =  "SELECT bookID,bookName,bookPrice,bookLeft,bookCatagory,bookPublishD,bookAuthor,bookClick,bookPic FROM booklist WHERE bookID= ?";
	$stmt = $db_link->prepare($sql_select);
	$stmt -> bind_param("i",$_GET["id"]);
	$stmt -> execute();
	$stmt -> bind_result($bookID,$bookName,$bookPrice,$bookLeft,$bookCatagory,$bookPublishD,$bookAuthor,$bookClick,$bookPic);
	$stmt -> fetch();
?>

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
*
{
	margin: 0 auto;
	font-family: "微軟正黑體";
	text-align: center;
}
table 
{
  border-collapse: collapse;
}
table,th,td
{
	border-collapse: collapse;
	border :1px solid black;
}
th
{
	background: skyblue;
}
td
{
	padding: 5px;
}
a
{
	text-decoration: none;
}
		
</style>
</head>
<body>
<h1>書籍資料管理系統-更新資料</h1>
<input type="button" name="" value="回主畫面" onclick="location.href='data.php'">
<form method="POST" action="">
	<table>
		<tr>
			<th>欄位</th>
			<th>資料</th>
		</tr>
		<tr>
			<td>書名</td>
			<td><input type="text" name="bookName" value="<?php echo $bookName ?>"></td>
		</tr>
		<tr>
			<td>價格</td>
			<td><input type="text" name="bookPrice" value="<?php echo $bookPrice ?>"></td>
		</tr>
		<tr>
			<td>庫存</td>
			<td>
				<input type = "text" name = "bookLeft" value="<?php echo $bookLeft ?>"></td>
		</tr>
		<tr>
			<td>分類</td>
			<td><input type="text" name="bookCatagory" value="<?php echo $bookCatagory ?>"></td>
		</tr>
		<tr>
			<td>出版日期</td>
			<td><input type="date" name="bookPublishD" value="<?php echo $bookPublishD ?>"></td>
		</tr>
		<tr>
			<td>作者</td>
			<td><input type="text" name="bookAuthor" value="<?php echo $bookAuthor ?>"></td>
		</tr>
		<tr>
			<td>點擊次數</td>
			<td><input type="text" name="bookClick" value="<?php echo $bookClick ?>"></td>
		</tr>
		<tr>
			<td>書本封面網址</td>
			<td><input type="text" name="bookPic" value="<?php echo $bookPic ?>"></td>
		</tr>
<tr>
	<td colspan="2" style="text-align: center">
		<input type="hidden" name="bookID" value="<?php echo $bookID;?>">
		<input type="hidden" name="action" value="update">
		<input type="submit" name="btnSMT" value="更新資料">
		<input type="reset" name="btnRST" value="重新填寫">
	</td>
</tr>
</table>
</form>
</body>
</html>
