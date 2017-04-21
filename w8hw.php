<?php

$link=@mysqli_connect(
	'localhost',
	'root',		//使用者名稱
	'19961216', //密碼
	'php2017'); //資料夾

if ($link) {
	echo "就決定是你了!";
}else{

	echo "DB Connected Failed";
}
mysqli_query($link,"SET NAMES utf8");
$name=$_POST["name"];
$id=$_POST["id"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$phone=$_POST["phone"];
$bd=$_POST["bd"];
$size=$_POST["size"];
$team=$_POST["team"];

$sql2="INSERT INTO w8hw(name,id,gender,address,phone,bd,size,team )VALUES('$name','$id','$gender','$address','$phone','$bd','$size','$team')";
$result=mysqli_query($link,$sql2);

$result=mysqli_query($link,"SELECT * FROM w8hw");  //讀取整張表資料

echo "<table border=1>";
while($row=mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>";
	echo $row["no"];
	echo "</td><td>";
	echo $row["name"];
	echo "</td><td>";
	echo $row["id"];
	echo "</td><td>";
	echo $row["gender"];
	echo "</td><td>";
	echo $row["address"];
	echo "</td><td>";
	echo $row["phone"];
	echo "</td><td>";
	echo $row["bd"];
	echo "</td><td>";
	echo $row["size"];
	echo "</td><td>";
	echo $row["team"];
	echo "</td></tr>";

}
echo "<table>";






mysqli_close($link);
?>