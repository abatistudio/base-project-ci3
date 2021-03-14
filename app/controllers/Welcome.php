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
    $this->tsdata['category'] = $this->category();
  }

	public function index()
	{
	    $param = array(
	      'table'=>'posts',
	      'field'=>'*',
	      'where'=>'',
	      'order'=>'idposts DESC',
	      'limit'=>0,
	      'offset'=>0
	    );
	    $result = $this->tscrud->get($param);

	    $this->tsdata['posts'] = array();
			if($result['success']){
				$this->tsdata['posts'] = $result['rows'];
			}
			
			$view = $this->tsdata['folder'].'welcome'; 
			$this->load->view($view, $this->tsdata);
			// echo $this->db->last_query();
	}

	public function userin()
	{
		if(isset($_POST['login']))
		{
			$login = html_escape($this->input->post('username'), ENT_QUOTES);
	    $passw = html_escape($this->input->post('password'), ENT_QUOTES);
	    $param = array(
	      'table'=>'users',
	      'field'=>'userid, username, useremail',
	      'where'=>"login = '$login' AND password = '".mysqlPassword($passw)."'",
	      'order'=>'',
	      'limit'=>0,
	      'offset'=>0
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

	function readpostsbycategory($idcategory=0)
	{
		$param = array(
      'table'=>'posts',
      'field'=>'*',
      'where'=>'categoryposts = '.$idcategory,
      'order'=>'idposts DESC',
      'limit'=>0,
      'offset'=>0
    );
    $result = $this->tscrud->get($param);

    $this->tsdata['posts'] = array();
		if($result['success']){
			$this->tsdata['posts'] = $result['rows'];
		}
		
		$view = $this->tsdata['folder'].'welcome'; 
		$this->load->view($view, $this->tsdata);
	}

	private function category()
	{
		$param = array(
	      'table'=>'category',
	      'field'=>'*',
	      'where'=>'',
	      'order'=>'',
	      'limit'=>0,
	      'offset'=>0
	    );
	    $result = $this->tscrud->get($param);

	    $category = array();
			if($result['success']){
				$category = $result['rows'];
			}

			return $category;
	}

}

/* End of file Welcome.php */
/* Location: .//home/tamrin/www/baserevoci3/app/controllers/Welcome.php */