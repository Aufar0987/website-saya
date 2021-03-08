<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Service_m extends CI_Model {

    public function get($id=null)
    {
        $this->db->select('service.*, office.name as office_name, p_category.name as category_name, information.name as information_name');
        $this->db->from('service');
        $this->db->join('office', 'office.office_id = service.office_id');
        $this->db->join('p_category', 'p_category.category_id = service.category_id');
        $this->db->join('information', 'information.information_id = service.information_id');
        if($id != null) {
            $this->db->where('service_id', $id);
        }
        $this->db->order_by('service_id', 'asc');
        $query = $this->db->get();
        return $query; 
    }

    public function add($post) 
    {
        $params = [
            'date' => $post['date'],
            'office_id' => $post['office'],
            'category_id'=> $post['category'],
            'information_id' => $post['information'],
        ];
        $this->db->insert('service', $params);
    }

    public function edit()
    {
        $params = [
            'date' => $post['date'],
            'office_id' => $post['office'],
            'category_id'=> $post['category'],
            'information_id' => $post['information'],
        ];
        $this->db->where('service_id', $post['id']);
        $this->db->update('service', $params);
    }

    public function del($id)
    {
        $this->db->where('service_id', $id);
        $this->db->delete('service');
    }

}
?>