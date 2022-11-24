<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->model('migration_contact_us', 'contact_us');
    }

	public function index()
	{
		$meta['title'] = 'Contact Us | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('view_contact_us');
		$this->load->view('wireframe/footer');
	}
}
