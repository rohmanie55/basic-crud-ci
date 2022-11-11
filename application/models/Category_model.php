<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {	
    protected $table = "categoris";

    public function get(){
        return $this->db->query("select * from $this->table")->result();
    }
}