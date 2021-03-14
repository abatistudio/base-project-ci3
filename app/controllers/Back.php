<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back extends TS_Controller {

	public function __construct()
  {
    parent::__construct();
    if(!$this->session->userdata('user'))
    {
      redirect('welcome/');
    }
    $this->tsdata['kelas'] = 'back';
    $this->tsdata['folder']= 'back/';
    $this->tsdata['template'] = 'template/';
  }

	public function index()
	{
		$view = $this->tsdata['folder'].'back'; 
		$this->load->view($view, $this->tsdata);
	}

	public function userout()
	{
		$this->session->sess_destroy();
		redirect('welcome','refresh');
	}

}

/* End of file Back.php */
/* Location: .//home/tamrin/www/baserevoci3/app/controllers/Back.php */