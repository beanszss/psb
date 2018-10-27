<?php

class Home_model extends CI_Model {

    public function daftar()
    {
    	$data = array(
	        'nama' => $this->input->post('nama'),
	        'jenkel' => $this->input->post('jenkel'),
	        'tempat_lahir' => $this->input->post('tempat_lahir'),
	        'tgl_lahir' => $this->input->post('tgl_lahir'),
	        'email' => $this->input->post('email'),
	        'password' => md5($this->input->post('password'))
		);

		$this->db->insert('tb_mhs', $data);
    }

    public function validasi($email, $password)
    {
    	$query = $this->db->where('email', $email)->where('password', $password)->get('tb_mhs');

    	if ($query->num_rows() !== 0) {
			
			$user = $query->row();
			$data = array(
				'id'        => $user->id,
				'nama'      => $user->nama,
				'email'     => $email->email,
				'logged_in' => TRUE
			);

			$this->session->set_userdata($data);
			return TRUE;

		} else {

			return FALSE;

		}
    }

    public function logged_in() 
    {
    	if ($this->session->userdata('logged_in') == TRUE) {
			return TRUE;
		} else {
			return FALSE;
		}
    }

    public function get_userlogin()
    {
    	$query = $this->db->where('id', $this->session->userdata('id'))->get('tb_mhs');
    	return $query->row();
    }

}