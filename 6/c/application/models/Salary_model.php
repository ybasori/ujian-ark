<?php

class Salary_model extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->table_name = "name";
        $this->table_work = "work";
        $this->table_salary = "salary";
    }
    public function get(){
        return $this->db->select("*")->from($this->table_salary)->get()->result();
    }

    public function deleteById($id){
        return $this->db->delete($this->table_salary,[
            "id"=>$id
        ]);
    }

    public function save($data){
        return $this->db->insert($this->table_salary,$data);
    }

    public function updateById($data, $id){
        return $this->db->update($this->table_salary,$data,[
            "id"=>$id
        ]);
    }

    public function getById($id){
        return $this->db->get_where($this->table_salary, [
            "id"=>$id
        ])->row();
    }
}
