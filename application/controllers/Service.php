<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {
    

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['service_m', 'office_m','category_m','information_m']);
	}
	
	public function index()
	{
		$data['row'] = $this->service_m->get();
		$this->template->load('template', 'service_report/service_report_data', $data);
    }

    public function add()
    {
        $service = new stdClass();
        $service->service_id = null;
        $service->date = null;
        $service->office_id = null;
        $service->category_id = null;
        $service->information_id = null;
        $query_office = $this->office_m->get();
        $query_category = $this->category_m->get();
        $query_information = $this->information_m->get();
        // $office[null] = '- Pilih -';
		// foreach($query_office->result() as $off) {
		// 	$office[$off->office_id] = $off->name;
        // }
        
        $data = array (
			'page' => 'add',
			'row' => $service,
			'information' => $query_information,
            'office' => $query_office,
            'category' => $query_category,
        );
        $this->template->load('template','service_report/service_report_form', $data);
    }

    public function add1()
    {
        $this->template->load('template','dashboard');
    }

    public function edit($id) 
    {
        $query = $this->service_m->get($id);
		if($query->num_rows() > 0) {
			$service = $query->row();
			$query_information = $this->information_m->get();
            $query_office = $this->office_m->get();
            $query_category = $this->category_m->get();

            $office[null] = '- Pilih -';
            foreach($query_office->result() as $off) {
                $office[$off->office_id] = $off->name;
            }

			$data = array (
			'page' => 'add',
			'row' => $service,
			'information' => $query_information,
            'office' => $office, 'selectedoffice' => null,
            'category' => $query_category,
        );

        $this->template->load('template', 'service_report/service_report_data', $data);
		} else {
			echo "<script>alert('Data tidak  ditemukan');";
			echo "window.location='".site_url('service')."';</script>";
		}
    }

    public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->service_m->add($post);
		} else if(isset($_POST['edit'])) {
			$this->service_m->edit($post);
		}
		if($this->db->affected_rows () > 0 ) {
            echo "<script>alert('Data berhasil disimpan');</script>";
        }
        echo "<script>window.location='".site_url('service')."';</script>";

	}


    public function del($id)
    {
        $this->service_m->del($id);
		if($this->db->affected_rows () > 0 ) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        redirect('service');
    }
    
}
?>