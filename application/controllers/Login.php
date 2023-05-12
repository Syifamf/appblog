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

		if ($this->input->post()) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if($username == 'Syifa' && $password == '123') {
				redirect('backend/dashboard');
			} else {
				$login_salah = 'kombinasi username & password salah';
			}
	}

		view('login', ['login_salah' => $login_salah]);
	}


}
