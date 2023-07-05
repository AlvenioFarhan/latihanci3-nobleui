<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller {

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

	public function advancedelements()
	{
		$this->load->view('pages/forms/advanced-elements');
	}

    public function basicelements()
	{
		$this->load->view('pages/forms/basic-elements');
	}

    public function editors()
	{
		$this->load->view('pages/forms/editors');
	}

    public function wizard()
	{
		$this->load->view('pages/forms/wizard');
	}

}