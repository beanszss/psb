<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
        
    }

	public function index()
	{
		$this->load->view('home/index');
		// $email = 'firasmuhammadpratama@gmail.com';
		// $explode = explode('@', $email);

		// print_r($explode[0]);
	}

	public function daftar()
	{
		$this->load->view('home/daftar');
	}

	public function login()
	{
		$this->load->view('home/login');
	}

	public function prosesdaftar()
	{
		$this->home_model->daftar();
	}

	public function proseslogin()
	{
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$query = $this->home_model->validasi($email, $password);

		if ($query == TRUE) {
			redirect('home/dashboard');
		} else {
			redirect('home/login');
		}
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home/login');
	}

	public function dashboard()
	{
		if ($this->logged_in()) {
			$data['user'] = $this->home_model->get_userlogin();
			$this->load->view('home/dashboard', $data);
		} else {
			redirect('home/login');
		}
	}

	private function logged_in()
	{
		return $this->home_model->logged_in();
	}

}
