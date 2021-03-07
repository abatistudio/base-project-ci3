<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends TS_Controller {

	public function index()
	{
		echo '<pre>';
		print_r($this->tsdata);
	}

	public function userin()
	{
		// test fungsi login()
		$username = 'admin';
		$password = '123';
		$result = $this->login($username, $password);
		if($result['success']){
			$user = $result['rows'][0];
			$this->session->set_userdata('user',$user);

			echo '<pre>';
			print_r($user);
		}else{
			echo '<pre>';
			print_r($result);
		}
	}

	public function userout()
	{
		$this->logout();
	}

}

/* End of file Welcome.php */
/* Location: .//home/tamrin/www/baserevoci3/app/controllers/Welcome.php */
