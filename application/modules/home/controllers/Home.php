<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->model('migration_home', 'home');
    }

	public function index()
	{
		$meta['title'] = 'Home | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('view_home');
		$this->load->view('wireframe/footer');
	}

	public function getImg(){

		if(!empty(trim($this->input->post('getImg')))) {
			$data['response'] = 'true';
			$data['message'] = 'No retailer selected';
			$data['img'] = base_url('public/images/f1/sundaebites_animation.gif');

		} else {
			$data['response'] = 'false';
			$data['message'] = 'No retailer selected';
		}
		echo json_encode($data);
	}
}
