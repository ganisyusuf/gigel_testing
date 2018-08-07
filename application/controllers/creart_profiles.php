<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creart_profiles extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
			parent::__construct();
			$this->load->library('session');
			$this->load->model('Creart_profiles_model');
			$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('index.php');
	}

	public function signup(){
		$this->load->view('Register.php');
	}

	public function signin(){
		$this->load->view('login.php');
	}
	public function keluar(){
		session_start();
		session_destroy();
		redirect('Creart_profiles/');

	}
	public function profile(){
		$data['user_profiles']= $this->Creart_profiles_model->view_user();
		$this->load->view('profil_v.php',$data);
	}
	public function editprofil(){
		$data['user_profiles']= $this->Creart_profiles_model->view_user();
		$this->load->view('editprofil_v.php',$data);
	}
	public function editpassword(){
		$data['user_profiles']= $this->Creart_profiles_model->view_user();
		$this->load->view('editpassword_v.php',$data);
	}
	public function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$sql = "select * from user_profiles where email ='".$email."' and password ='".$password."'";

		$result = $this->db->query($sql);

		if($result->num_rows() > 0){
			$data_session = array(
				'email' => $email,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect('Creart_profiles/profile');
		}else{
			$pesan = 'Email_password';
			$data['halah'] = $this->Creart_profiles_model->cek_error($pesan);
			$this->load->view('login_error.php', $data);
		}
	}

	public function register(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');
		$password = $this->input->post('password');

		$cek_hp = $this->Creart_profiles_model->cek_hp($no_hp);
		$cek_email = $this->Creart_profiles_model->cek_email($email);

		if($cek_hp->num_rows() == 0){
			if($cek_email->num_rows() == 0){
					$data = array('nama' => $nama,
						'password' => $password,
						'email' => $email,
						'no_hp' => $no_hp,
						'alamat' => $alamat,
						'status_akun' => 1
						);

					$this->Creart_profiles_model->insert_data('user_profiles', $data);
					$pesan = 'berhasil_daftar';
					$data['halah'] = $this->Creart_profiles_model->cek_error($pesan);
				 	$this->load->view('login_berhasil_daftar.php',$data);
			}else{
				$pesan = 'Email telah digunakan';
				$data['halah'] = $this->Creart_profiles_model->cek_error($pesan);
				$this->load->view('Register_error.php', $data);
			}
		}else{
			$pesan = 'no_hp_sama';
			$data['halah'] = $this->Creart_profiles_model->cek_error($pesan);
			$this->load->view('Register_error.php', $data);
		}
	}
	public function update_profile(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$password = $this->input->post('password');

		$cek_password = $this->Creart_profiles_model->cek_password($password);

		if ($cek_password->num_rows()>0) {
			$data = array('nama' => $nama,
						'password' => $password,
						'alamat' => $alamat,
						'status_akun' => 1
						);
					$this->Creart_profiles_model->update('user_profiles', $data);
					$pesan = 'berhasil_diubah';
					$data['user_profiles'] = $this->Creart_profiles_model->view_user($this->session->userdata('email'));
				 	$this->load->view('profil_v.php',$data);
		}else{
	    			$this->load->helper('url');
		    		echo "<script type='text/javascript'>";
		            echo "alert ('Password yang anda masukkan tidak sesuai');";
		            echo "window.location.href = '".site_url('Creart_profiles/editprofil')."';";
		            echo "</script>";
	    	}  
					
		}

		public function update_password(){
			$password = $this->input->post('password');
			$password1 = $this->input->post('password1');
			$password2 = $this->input->post('password2');


		$cek_password = $this->Creart_profiles_model->cek_password($password);


		if ($cek_password->num_rows()>0) {
			if (strcmp($password1, $password2)==0) {
					$data = array(
						'password' => $password1,
						'status_akun' => 1
						);
					$this->Creart_profiles_model->update('user_profiles', $data);
					$pesan = 'berhasil_diubah';
					$data['user_profiles'] = $this->Creart_profiles_model->view_user($this->session->userdata('email'));
				 	$this->load->view('profil_v.php',$data);
		}else{
					$this->load->helper('url');
		    		echo "<script type='text/javascript'>";
		            echo "alert ('Password yang anda masukkan tidak sesuai');";
		            echo "window.location.href = '".site_url('Creart_profiles/editpassword')."';";
		            echo "</script>";
		}

		}else{
	    			$this->load->helper('url');
		    		echo "<script type='text/javascript'>";
		            echo "alert ('Password yang anda masukkan tidak sesuai');";
		            echo "window.location.href = '".site_url('Creart_profiles/editpassword')."';";
		            echo "</script>";
	    	}
	}
					
}
?>