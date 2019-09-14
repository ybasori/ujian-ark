<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salary extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('salary_model');
	}
	public function index()
	{
		if($this->input->method()=="get"){
			$data['salaries']=$this->salary_model->get();
			$data['_view']='pages/salary/index';
			$this->load->view("templates/template_header", $data);
			$this->load->view($data['_view']);
			$this->load->view("templates/template_footer");
		}
		else if($this->input->method()=="post" && empty($this->input->post("id"))){
			$this->salary_model->save([
				"salary"=>$this->input->post('salary')
			]);
			redirect("/salary");
		}
		else if($this->input->method()=="post" && !empty($this->input->post("id"))){
			$this->salary_model->updateById([
				"salary"=>$this->input->post('salary')
			], $this->input->post("id"));
			redirect("/salary");
		}
	}
	public function delete($id){
		$name = $this->salary_model->getById($id);
		$this->salary_model->deleteById($id);
		$this->session->set_flashdata('success_delete', $name->salary);
		redirect("/salary");
	}
}
