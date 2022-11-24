<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faqs extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->model('migration_faqs', 'faqs');
    }

	public function index()
	{
		$meta['title'] = 'Our Stories | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('view_faqs');
		$this->load->view('wireframe/footer');
	}
}
