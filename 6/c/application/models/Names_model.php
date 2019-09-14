<?php

class Names_model extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->table_name = "name";
        $this->table_work = "work";
        $this->table_salary = "salary";
    }
    public function get(){
        return $this->db->query("SELECT n.id, n.name as name, w.id as work_id, w.name as work, s.id as salary_id, s.salary as salary FROM ".$this->table_name." n JOIN ".$this->table_work." w ON n.id_work=w.id JOIN ".$this->table_salary." s ON n.id_salary=s.id")->result();
    }

    public function deleteById($id){
        return $this->db->delete($this->table_name,[
            "id"=>$id
        ]);
    }

    public function save($data){
        return $this->db->insert($this->table_name,$data);
    }

    public function updateById($data, $id){
        return $this->db->update($this->table_name,$data,[
            "id"=>$id
        ]);
    }

    public function getById($id){
        return $this->db->get_where($this->table_name, [
            "id"=>$id
        ])->row();
    }

    
}
