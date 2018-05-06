<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

	<title>网页计算器</title>
	<style type="text/css">

#calculate{

       margin: 10% auto;
       width: 600px;
       border: 1px solid #000;
}	</style>


<script type="text/javascript">


  var xmlhttp = null;
function $(id){
	return document.getElementById(id);
}
//创建ajax引擎
function getXMLHttpRequest(){

var xmlhttp;

 try{

xmlhttp = new XMLHttpRequest();


 }catch(e){

//Internet Explorer
                        try {
                                xmlhttp = new ActiveXObject("Msxml12.XMLHTTP");
                        }catch (e) {
                                try {
                                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                }catch (e) {
                                        alert("您的浏览器不支持AJAX！");
                                        return false;
                                }
                        }


 }

return xmlhttp;

}


function issubmit(){

xmlhttp = getXMLHttpRequest();
//怎么判断是否创建成功
if (xmlhttp) {
     //以post方式发送

  var url = "index.php/calculate/count/";
  var data = "num1="+$('num1').value+"&operate="+$('operate').value + "&num2=" + $('num2').value;


  //打开请求
  xmlhttp.open("post",url,true);
  //下面这句话是post方式发送时必须要
  xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  //指定回调函数 指定函数名一定不要带括号
  xmlhttp.onreadystatechange = deal;
  xmlhttp.send(data);
}

}





function deal(){
//取出从服务器返回的数据
if (xmlhttp.readyState == 4 ) {
$('result').value = xmlhttp.responseText;}
}


</script>


</head>
<body>


<div id="calculate">


<form >


<input type="text" name="num1" id="num1"/>
<select name="operate" id="operate">


<option value="+">+</option>
<option value="-">-</option>
<option value="x">x</option>
<option value="÷">÷</option>

</select>
<input type="text" name="num2" id="num2"/>

<input type="text" name="result" id="result" disabled="disabled">
<input type="button" value="计算" onclick="issubmit()" />



</form>



</div>




</body>
</html>