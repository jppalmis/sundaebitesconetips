<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Our_stories extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->model('migration_our_stories', 'our_stories');
    }

	public function index()
	{
		$meta['title'] = 'Our Stories | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('view_our_stories');
		$this->load->view('wireframe/footer');
	}
}
