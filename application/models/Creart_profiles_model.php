<?PHP
	class Creart_profiles_model extends CI_Model{

		public function getAll(){
			return $this->db->get('user_profiles');
		}
		public function cek_error($pesan){
			return $this->db->query("select * from error where error ='".$pesan."'");
		}

		public function cek_hp($hp){
			return $this->db->query("select * from user_profiles where no_hp ='".$hp."'");
		}

		public function cek_email($email){
			return $this->db->query("select * from user_profiles where email ='".$email."'");
		}
		public function cek_password($password){
			return $this->db->query("select * from user_profiles where password ='".$password."'");
		}

		public function insert_data($table, $data){
			$this->db->insert($table, $data);
		}
		public function view_user(){
			$sql ="select  * from user_profiles where email ='".$this->session->userdata('email')."'";
			return $this->db->query($sql);
		}
		public function update($email,$data){
			$this->db->where('email',$this->session->userdata('email'));
			$this->db->update('user_profiles',$data);
		}
	}