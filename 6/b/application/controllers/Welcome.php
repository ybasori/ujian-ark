<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('names_model');
		$this->load->model('work_model');
		$this->load->model('salary_model');
	}
	public function index()
	{
		if($this->input->method()=="get"){
			$data['names']=$this->names_model->get();
			$data['works']=$this->work_model->get();
			$data['salaries']=$this->salary_model->get();
			$data['_view']='pages/home/index';
			$this->load->view("templates/template_header", $data);
			$this->load->view($data['_view']);
			$this->load->view("templates/template_footer");
		}
		else if($this->input->method()=="post" && empty($this->input->post("id"))){
			$this->names_model->save([
				"name"=>$this->input->post('name'),
				"id_work"=>$this->input->post('work'),
				"id_salary"=>$this->input->post('salary')
			]);
			redirect("/");
		}
		else if($this->input->method()=="post" && !empty($this->input->post("id"))){
			$this->names_model->updateById([
				"name"=>$this->input->post('name'),
				"id_work"=>$this->input->post('work'),
				"id_salary"=>$this->input->post('salary')
			], $this->input->post("id"));
			redirect("/");
		}
	}
	public function delete($id){
		$name = $this->names_model->getById($id);
		$this->names_model->deleteById($id);
		$this->session->set_flashdata('success_delete', $name->name);
		redirect("/");
		return $this->output
		->set_content_type('application/json')
		->set_status_header(200)
		->set_output(json_encode([
			"msg"=>"nice"
		]));
	}
}
