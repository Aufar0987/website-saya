<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information extends CI_Controller {

	    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('information_m');
    }

	public function index()
	{
		$data['row'] = $this->information_m->get();
		$this->template->load('template', 'report/information/information_data', $data);
	}

	public function add() {
		$information = new stdClass();
		$information->information_id = null;
		$information->name = null;
		$data = array (
			'page' => 'add',
			'row' => $information
		);
		$this->template->load('template', 'report/information/information_form', $data);		
	}

	public function edit($id)
	{
		$query = $this->information_m->get($id);
		if($query->num_rows() > 0) {
			$information = $query->row();
			$data = array (
				'page' => 'edit',
				'row' => $information
			);
			$this->template->load('template', 'report/information/information_form', $data);	
		} else {
			echo "<script>alert('Data tidak  ditemukan');";
			echo "window.location='".site_url('information')."';</script>";
		}
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->information_m->add($post);
		} else if(isset($_POST['edit'])) {
			$this->information_m->edit($post);
		}
		if($this->db->affected_rows () > 0 ) {
            echo "<script>alert('Data berhasil disimpan');</script>";
        }
        echo "<script>window.location='".site_url('information')."';</script>";

	}

	public function del($id)
	{
		$this->information_m->del($id);
		if($this->db->affected_rows () > 0 ) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('information')."';</script>";
	}

}
?>