<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Halaman extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Orbit Modular & Technical Gear Indonesia';
		$this->load->view('templates/header', $data);
		$this->load->view('firstload');
		$this->load->view('templates/footer');
	}

	public function register()
	{
		$this->form_validation->set_rules('firstname', 'First', 'required|trim');
		$this->form_validation->set_rules('lastname', 'Last', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			' is_unique' => ' this email is already registered '
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');

		if ($this->form_validation->run() == false) {

			$data['title'] = 'Registration - ORBIT Gear Indonesia';
			$this->load->view('templates/header', $data);
			$this->load->view('register');
			$this->load->view('templates/footer');
		} else {
			$data = [
				'first_name' => htmlspecialchars($this->input->post('firstname', true)),
				'last_name' => htmlspecialchars($this->input->post('lastname', true)),
				'email' => htmlspecialchars($this->input->post('email')),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'is_active' => 1
			];
			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account succes
			to create 
			</div>');
			redirect('halaman/login');
		}
	}


	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {

			$data['title'] = 'Login - ORBIT Gear Indonesia';
			$this->load->view('templates/header', $data);
			$this->load->view('login');
			$this->load->view('templates/footer');
		} else {
			//validasinya success
			$this->_login(); //method private
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();
		//jika usernya ada
		if ($user) {
			//user nya aktif
			if ($user['is_active'] == 1) {
				//cekpasswordnya
				if (password_verify($password, $user['password'])) {
					$data = [
						'email' => $user['email']
					];
					$this->session->set_userdata($data);
					redirect('user');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Wrong password
					</div>');
					redirect('halaman/login');
				}

			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			This email hs been not active
			</div>');
				redirect('halaman/login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			email is not registered
			</div>');
			redirect('halaman/login');
		}
	}


	public function ourstory()
	{
		$data['title'] = 'Our Story - ORBIT Gear Indonesia';
		$this->load->view('templates/header', $data);
		$this->load->view('OURSTORY');
		$this->load->view('templates/footer');
	}

	public function lifetime()
	{
		$data['title'] = 'Limited-lifitime warranty - ORBIT Gear Indonesia';
		$this->load->view('templates/header', $data);
		$this->load->view('LIMITED_LIFETIME');
		$this->load->view('templates/footer');
	}

	public function error()
	{
		$data['title'] = 'Error - ORBIT Gear Indonesia';
		$this->load->view('templates/header', $data);
		$this->load->view('PAGE_NOT_FOUND');
		$this->load->view('templates/footer');
	}


	public function hubungi()
	{

		$data['title'] = 'Hubungi Kami - ORBIT Gear Indonesia';

		$this->load->view('hubungikami', $data);

	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					You have been logout
					</div>');
		redirect('halaman/login');
	}

}
