<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"></head>

	<title></title>
</head>
<style type="text/css">


#calculators{

margin: 10% auto;
width: 430px;
border: 1px solid #000;

}


</style>


<body>

<div id="calculators">


<?php
//从控制器接收数据并对数据操作
if (is_numeric($num1) && is_numeric($num2) && $op && $result && $result != FALSE) {

	echo $num1 . " " . $op . $num2 . " = " . $result . "<br/>";

} else {
	echo "计算错误<br/>";
}
?>
<a href="/welcome">返回首页</a>





</div>



</body>
</html>