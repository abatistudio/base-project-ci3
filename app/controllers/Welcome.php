<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends TS_Controller {

	public function __construct()
  {
    parent::__construct();
    if($this->session->userdata('user'))
    {
      redirect('back/');
    }
    $this->tsdata['kelas'] = 'welcome';
    $this->tsdata['folder']= 'welcome/';
    $this->tsdata['template'] = 'template/';
  }

	public function index()
	{
		// echo 'halo';
		$view = $this->tsdata['folder'].'welcome'; 
		$this->load->view($view, $this->tsdata);
	}

	public function userin()
	{
		if(isset($_POST['login']))
		{
			$login = html_escape($this->input->post('username'), ENT_QUOTES);
	    $passw = html_escape($this->input->post('password'), ENT_QUOTES);
	    $param = array(
	      'table'=>'users',
	      'field'=>'*',
	      'where'=>array('login' => $login, 'password' => mysqlPassword($passw)),
	    );
	    $result = $this->tscrud->get($param);

			if($result['success']){
				$user = $result['rows'][0];
				$this->session->set_userdata('user',$user);
				redirect('back/');
			}else{
				$this->session->set_flashdata('login', FALSE);
			}
		}
		$view = $this->tsdata['folder'].'userin'; 
		$this->load->view($view, $this->tsdata);
	}

}

/* End of file Welcome.php */
/* Location: ./app/controllers/Welcome.php */
