<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Office extends CI_Controller {

	    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('office_m');
    }

	public function index()
	{
		$data['row'] = $this->office_m->get();
		$this->template->load('template', 'office/office_data', $data);
	}

	public function add() {
		$office = new stdClass();
		$office->office_id = null;
		$office->name = null;
		$office->alamat = null;
		$office->phone = null;
		$data = array (
			'page' => 'add',
			'row' => $office
		);
		$this->template->load('template', 'office/office_form', $data);		
	}

	public function edit($id)
	{
		$query = $this->office_m->get($id);
		if($query->num_rows() > 0) {
			$office = $query->row();
			$data = array (
				'page' => 'edit',
				'row' => $office
			);
			$this->template->load('template', 'office/office_form', $data);	
		} else {
			echo "<script>alert('Data tidak  ditemukan');";
			echo "window.location='".site_url('office')."';</script>";
		}
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->office_m->add($post);
		} else if(isset($_POST['edit'])) {
			$this->office_m->edit($post);
		}
		if($this->db->affected_rows () > 0 ) {
            $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
        }
       redirect('office');
	}

	public function del($id)
	{
		$this->office_m->del($id);
		if($this->db->affected_rows () > 0 ) {
            $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
        }
       redirect('office');
	}

}
?>