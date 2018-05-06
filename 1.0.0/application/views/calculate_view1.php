<?php
// echo form_open('/calculate/count', array('class' => 'myform', 'id' => 'myform'));
// //创建输入框
// echo form_input(array('name' => 'num1', 'id' => 'num1'));
// //创建下拉列表
// $values = array('add' => '+', 'sub' => '-', 'mul' => 'x', 'div' => '÷');
// echo form_dropdown('operate', $values, 'add', 'id="operate" class ="operate"');
// //创建输入框
// echo form_input(array('name' => 'result', 'id' => 'result', 'disabled' => 'disabled'));
// //创建提交
// echo form_submit(array('mysubmit', '计算', 'id = "submit"'));
// echo form_close();

$str = "今年是第一次参与咱们公司年终评分互测中，名列前矛真的就是身边那些努力工作，积极向上，责任心非常强的同事。谁在做什么，以怎样态度对待生活与工作，都能在这个调查问卷很公正直观的显示出来。";

echo str_len($str);

?>