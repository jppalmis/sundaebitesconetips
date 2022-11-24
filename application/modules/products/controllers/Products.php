<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->model('migration_products', 'products');
    }

	public function index()
	{
		$meta['title'] = 'Products | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('view_products');
		$this->load->view('wireframe/footer');
	}

	public function milk_chocolate()
	{
		$meta['title'] = 'Milk Chocolate | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/products/milkchocolate');
		$this->load->view('wireframe/footer');
	}

	public function dark_chocolate()
	{
		$meta['title'] = 'Dark Chocolate | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/products/darkchocolate');
		$this->load->view('wireframe/footer');
	}

	public function white_chocolate()
	{
		$meta['title'] = 'White Chocolate | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/products/whitechocolate');
		$this->load->view('wireframe/footer');
	}

	public function matcha_cookies()
	{
		$meta['title'] = 'Matcha Cookies | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/products/matchacookies');
		$this->load->view('wireframe/footer');
	}
	
	public function cookies_and_cream()
	{
		$meta['title'] = 'Cookies and Cream | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/products/cookiesandcream');
		$this->load->view('wireframe/footer');
	}
	
	public function strawberry()
	{
		$meta['title'] = 'Strawberry | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/products/strawberry');
		$this->load->view('wireframe/footer');
	}
	
	public function espresso()
	{
		$meta['title'] = 'Espresso | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/products/espresso');
		$this->load->view('wireframe/footer');
	}
	
	public function krunchy()
	{
		$meta['title'] = 'Krunchy | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/products/krunchy');
		$this->load->view('wireframe/footer');
	}
	
	public function speculoos()
	{
		$meta['title'] = 'Speculoos | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/products/speculoos');
		$this->load->view('wireframe/footer');
	}

	public function pouch()
	{
		$meta['title'] = 'Pouch | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/merch/pouch');
		$this->load->view('wireframe/footer');
	}

	public function coinpurse()
	{
		$meta['title'] = 'Coin Purse | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/merch/coinpurse');
		$this->load->view('wireframe/footer');
	}

	public function heartpouch()
	{
		$meta['title'] = 'Heart Pouch | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/merch/heartpouch');
		$this->load->view('wireframe/footer');
	}

	public function totebag()
	{
		$meta['title'] = 'Tote Bag | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/merch/totebag');
		$this->load->view('wireframe/footer');
	}

	public function umbrella()
	{
		$meta['title'] = 'Umbrella | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/merch/umbrella');
		$this->load->view('wireframe/footer');
	}

	public function cap1()
	{
		$meta['title'] = 'Cap 1 | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/caps/cap1');
		$this->load->view('wireframe/footer');
	}

	public function cap2()
	{
		$meta['title'] = 'Cap 2 | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/caps/cap2');
		$this->load->view('wireframe/footer');
	}

	public function cap3()
	{
		$meta['title'] = 'Cap 3 | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/caps/cap3');
		$this->load->view('wireframe/footer');
	}

	public function cap4()
	{
		$meta['title'] = 'Cap 4 | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/caps/cap4');
		$this->load->view('wireframe/footer');
	}

	public function cap5()
	{
		$meta['title'] = 'Cap 5 | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/caps/cap5');
		$this->load->view('wireframe/footer');
	}

	public function cap6()
	{
		$meta['title'] = 'Cap 6 | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/caps/cap6');
		$this->load->view('wireframe/footer');
	}

	public function cap7()
	{
		$meta['title'] = 'Cap 7 | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/caps/cap7');
		$this->load->view('wireframe/footer');
	}

	public function cap8()
	{
		$meta['title'] = 'Cap 8 | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/caps/cap8');
		$this->load->view('wireframe/footer');
	}

	public function cap9()
	{
		$meta['title'] = 'Cap 9 | Sundae Bites';

		$this->load->view('wireframe/header', $meta);
		$this->load->view('wireframe/nav');
		$this->load->view('/caps/cap9');
		$this->load->view('wireframe/footer');
	}
}
