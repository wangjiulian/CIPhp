<?php if (!defined('BASEPATH')) {
	exit('No dicrect script access allowed');
}

/**
 *
 */
class Calculate extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('calculate_model');
		$this->load->helper('form');
	}
//默认方法
	function index() {
		//加载caculate_view视图
		$this->load->view('calculate_view1');
	}

	function count() {

//使用输入类接收参数
		$num1 = $this->input->post('num1');
		$op = $this->input->post('operate');
		$num2 = $this->input->post('num2');

		echo $num1 . " ---" . $num2;

		if (is_numeric($num1) && is_numeric($num2)) {
			//如果两个输入均为数字，则调用calculate_model模型下的count方法
			$result = $this->calculate_model->count($num1, $num2, $op);

			echo $result;
/*
//生成要传给视图的数据
$data = array('num1' => $num1, 'op' => $op, 'num2' => $num2, 'result' => $result);
//加载视图
$this->load->view('result_view', $data);*/
		} else {

			echo "NO";

		}

	}

}
