<?php

class Test extends CI_Controller {
	public function index() {

		echo "This is default function";

		$this->load->view('test');
		$this->load->model('model_name');

	}

	public function hello() {
		echo "This is hello function";

	}
}

?>