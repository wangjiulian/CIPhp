
<?php

class Calculate_model extends CI_Model {

	function __construct() {

		parent::__construct();
	}
	/*

		计算函数
	*/
	function count($num1, $num2, $op) {
		if ($op == "+") {
			return $num1 + $num2;
		} else if ($op == "-") {
			return $num1 - $num2;
		} else if ($op == "x") {
			return $num1 * $num2;
		} else if ($op == "÷") {
			return $num1 / $num2;
		} else {
			return "099";
		}
	}

}