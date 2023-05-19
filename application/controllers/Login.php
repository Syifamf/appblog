<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$login_salah = '';

		if ($this->session->has_userdata('username')) {
			redirect('backend/dashboard');
		}

		if ($this->input->post()) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = \Orm\User::first();
			if($username == $user->username && $password == $user->password) {
				$userdata =[
					'username' => $user->username,
				];
	
				$this->session->set_userdata($userdata);
				redirect('backend/dashboard');
			} else {
				$login_salah = 'kombinasi username & password salah';
			}
	}

		view('login', ['login_salah' => $login_salah]);
	}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect('login');
		}

}
