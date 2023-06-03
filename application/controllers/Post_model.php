<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Post_model extends CI_Model{
     
    function insert_post($title,$contents){
        $data = array(
            'judulMedia'    => $judulMedia,
            'description' => $contents
        );
        $this->db->insert('tb_post',$data);
    }
 
    function get_article_by_id($id){
        $query = $this->db->get_where('tb_post', array('id' =>  $id));
        return $query;
    }
}
?>