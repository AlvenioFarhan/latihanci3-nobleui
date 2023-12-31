<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    public function index()
    {
        $this->load->view('pages');
    }

	public function profile()
	{
		$this->load->view('pages/general/profile');
	}

	public function blankpage()
	{
		$this->load->view('pages/general/blank-page');
	}

	public function faq()
	{
		$this->load->view('pages/general/faq');
	}

	public function invoice()
	{
		$this->load->view('pages/general/invoice');
	}

	public function pricing()
	{
		$this->load->view('pages/general/pricing');
	}

	public function timeline()
	{
		$this->load->view('pages/general/timeline');
	}
}