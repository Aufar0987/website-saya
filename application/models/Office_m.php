<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Office_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('office');
        if($id != null) {
            $this->db->where('office_id', $id);
        }
          $query = $this->db->get();
          return $query;
    }

    public function add($post)
    {
      $params = [
        'name' => $post['office_name'],
        'alamat' => $post['alamat'],
        'phone' => $post['phone'],
      ];
      $this->db->insert('office', $params);
    }

    public function edit($post)
    {
      $params = [
        'name' => $post['office_name'],
        'alamat' => $post['alamat'],
        'phone' => $post['phone'],
        'updated' => date('Y-m-d H:i:s')  
      ];
      $this->db->where('office_id', $post['id']);
      $this->db->update('office', $params);
    }
    
    public function del($id)
    {
      $this->db->where('office_id', $id);
      $this->db->delete('office');
    }

}