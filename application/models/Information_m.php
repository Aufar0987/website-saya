<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Information_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('information');
        if($id != null) {
            $this->db->where('information_id', $id);
        }
          $query = $this->db->get();
          return $query;
    }

    public function add($post)
    {
      $params = [
        'name' => $post['information_name'],
      ];
      $this->db->insert('information', $params);
    }

    public function edit($post)
    {
      $params = [
        'name' => $post['information_name'],
        'updated' => date('Y-m-d H:i:s')  
      ];
      $this->db->where('information_id', $post['id']);
      $this->db->update('information', $params);
    }
    
    public function del($id)
    {
      $this->db->where('information_id', $id);
      $this->db->delete('information');
    }

}