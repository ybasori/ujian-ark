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
        return $this->db->select("w.id, w.name, s.salary, s.id as id_salary, s.id as salary_id")->from($this->table_work." w")->join($this->table_salary." s", "w.id_salary=s.id")->get()->result();
    }

    public function deleteById($id){
        return $this->db->delete($this->table_work,[
            "id"=>$id
        ]);
    }

    public function save($data){
        return $this->db->insert($this->table_work,$data);
    }

    public function updateById($data, $id){
        return $this->db->update($this->table_work,$data,[
            "id"=>$id
        ]);
    }

    public function getById($id){
        return $this->db->get_where($this->table_work, [
            "id"=>$id
        ])->row();
    }
}
