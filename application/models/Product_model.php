<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {	
    protected $table = "products";

    public function get(){
        return $this->db->query("select $this->table.*, categoris.name as category from $this->table left join categoris on $this->table.category_id=categoris.id")->result();
    }

    public function find($id){
        return $this->db->query("select * from $this->table where id=?", array($id))->row();
    }

    public function insert($data){
        $sql = "INSERT INTO $this->table (name, category_id) VALUES(?,?)";
        return $this->db->query($sql, $data);
    }

    public function update($id, $data){
        $sql = "UPDATE $this->table SET name=?, category_id=? where id=?";
        return $this->db->query($sql, array_merge($data, array($id)));
    }

    public function delete($id){
        $sql = "DELETE FROM products where id=?";
        return $this->db->query($sql, array($id));
    }
}