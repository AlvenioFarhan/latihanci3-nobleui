<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uicomponents extends CI_Controller {

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

	public function accordion()
	{
		$this->load->view('pages/uicomponents/accordion');
	}

    public function alerts()
	{
		$this->load->view('pages/uicomponents/alerts');
        
	}

    public function badges()
	{
		$this->load->view('pages/uicomponents/badges');
        
	}

	public function breadcrumbs()
	{
		$this->load->view('pages/uicomponents/breadcrumbs');
        
	}

	public function buttongroup()
	{
		$this->load->view('pages/uicomponents/button-group');
        
	}

	public function buttons()
	{
		$this->load->view('pages/uicomponents/buttons');
        
	}
	
	public function cards()
	{
		$this->load->view('pages/uicomponents/cards');
        
	}

	public function carousel()
	{
		$this->load->view('pages/uicomponents/carousel');
        
	}

	public function collapse()
	{
		$this->load->view('pages/uicomponents/collapse');
        
	}

	public function dropdowns()
	{
		$this->load->view('pages/uicomponents/dropdowns');
        
	}

	public function listgroup()
	{
		$this->load->view('pages/uicomponents/list-group');
        
	}

	public function mediaobject()
	{
		$this->load->view('pages/uicomponents/media-object');
        
	}

	public function modal()
	{
		$this->load->view('pages/uicomponents/modal');
        
	}

	public function navbar()
	{
		$this->load->view('pages/uicomponents/navbar');
        
	}

	public function navs()
	{
		$this->load->view('pages/uicomponents/navs');
        
	}

	public function pagination()
	{
		$this->load->view('pages/uicomponents/pagination');
        
	}

	public function popover()
	{
		$this->load->view('pages/uicomponents/popover');
        
	}

	public function progress()
	{
		$this->load->view('pages/uicomponents/progress');
        
	}

	public function scrollbar()
	{
		$this->load->view('pages/uicomponents/scrollbar');
        
	}

	public function scrollspy()
	{
		$this->load->view('pages/uicomponents/scrollspy');
        
	}

	public function spinners()
	{
		$this->load->view('pages/uicomponents/spinners');
        
	}

	public function tabs()
	{
		$this->load->view('pages/uicomponents/tabs');
        
	}

	public function tooltips()
	{
		$this->load->view('pages/uicomponents/tooltips');
        
	}
}
