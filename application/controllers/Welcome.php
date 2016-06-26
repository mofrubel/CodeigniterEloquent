<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('usermodel');

		$users = Usermodel:: all();

		/*echo "<pre>";
		print_r($users);*/
		foreach($users as $user)
		{
			echo $user->fname. ' '. $user->lname.'<br/>';
		}

	}
}
