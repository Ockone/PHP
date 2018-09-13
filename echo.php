<!DOCTYPE HTML>
<html>
<head>
    <title>第一个页面</title>
</head>
<body>

<h1>My first PHP page</h1>
<?php
echo "Hello World!<br>";
?>

<?php
/*
$x=5;
$y=10;

function mytest(){
	global $x, $y;
	$y=$x + $y;
}
myTest();
echo $y;
*/
?>

<?php
/*
function mytest(){
	static $x=0;
	echo $x,"<br>";
	$x++;
}
mytest();
mytest();
mytest();
*/
?>

<?php
/*
function mytest($x){
	echo $x;
}
mytest(5);
*/
?>

<?php
/*
echo "<h2>PHP很有趣！</h2>";
echo "Hello world!<br>";
echo "我要学PHP！<br>";
echo "这是一个","字符串，","使用了","多个","参数。";
*/
?>

<?php

$txt1="学习PHP";
$txt2="RUNOOB.COM";
$car=array("Volvo","BMW","Toyota");
echo $txt1;
echo "<br>";
echo "在{$txt2}学习PHP";
echo "<br>";
echo "我车的品牌是{$car[0]}";
?>

</body>
</html>