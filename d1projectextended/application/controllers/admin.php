<?php
class Admin extends My_Controller{

	public function dashboard(){
		 	
		$articles=$this->articles->articles_list();
		$this->load->view('admin/dashboard',['articles'=>$articles]);
	}
	public function addarticle(){
		$this->load->view('admin/addarticle');

	}
	public function storearticle(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','Article Title','required|alpha|trim');
		$this->form_validation->set_rules('body','Article Body','required|alpha|trim');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

		if($this->form_validation->run()){
			$post=$this->input->post();
			unset($post['submit']);
			
			if ($this->articles->add_articles($post)){
				$this->session->set_flashdata('feedback',"Article Added Successfuly");
				$this->session->set_flashdata('feedback_class','alert-success');
			}else{
				//insert failed
				$this->session->set_flashdata('feedback',"Article Failed to add .Please retry again!!!");
				$this->session->set_flashdata('feedback_class','alert-danger');
			}
			return(redirect('admin/dashboard'));

		}else{
			return (redirect('admin/addarticle'));
		}

	}
	public function editarticle($article_id){
		
		 $article= $this->articles->find_articles($article_id);
		 $this->load->library('form_validation');
		 $this->load->view('admin/editarticle',['article'=>$article]);

	}

	public function updatearticle($article_id){
			 
			$this->load->library('form_validation');
		$this->form_validation->set_rules('title','Article Title','required|alpha|trim');
		$this->form_validation->set_rules('body','Article Body','required|alpha|trim');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

		if($this->form_validation->run()){
			$post=$this->input->post();
			unset($post['submit']);
				if ($this->articles->update_articles($article_id,$post)){
				$this->session->set_flashdata('feedback',"Article Updated Successfuly");
				$this->session->set_flashdata('feedback_class','alert-success');
			}else{
				//insert failed
				$this->session->set_flashdata('feedback',"Article Failed to Update .Please retry again!!!");
				$this->session->set_flashdata('feedback_class','alert-danger');
			}
			return(redirect('admin/dashboard'));

		}else{
			return (redirect('admin/editarticle'));
		}

	}
	public function delete_article(){
		$article_id=$this->input->post('article_id');		
		if ($this->articles->delete_articles($article_id,$post)){
				$this->session->set_flashdata('feedback',"Article Deleted Successfuly");
				$this->session->set_flashdata('feedback_class','alert-success');
			}else{
				//insert failed
				$this->session->set_flashdata('feedback',"Article Failed to Delete .Please retry again!!!");
				$this->session->set_flashdata('feedback_class','alert-danger');
			}
			return(redirect('admin/dashboard'));
	}
	public function __construct(){
		parent::__construct();
		if(! $this->session->userdata('user_id') ){
			return (redirect('login', 'refresh'));
		}
		$this->load->model('articlesmodel','articles');	
			$this->load->helper('form');	

	}
}