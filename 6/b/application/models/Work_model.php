<?php

class Work_model extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->table_name = "name";
        $this->table_work = "work";
        $this->table_salary = "salary";
    }
    public function get(){
        return $this->db->select("*")->from($this->table_work)->get()->result();
    }
}
