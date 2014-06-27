<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		// esse help trata da url amigavel
		$this->load->helper('url');
		// esse help serve para simplificar a criacao de um form
		$this->load->helper('form');
		// esse help server para organizar em array as informacoes do form para o model entre outros
		$this->load->helper('array');
		// carrega a parte de validacao do form do codeigniter
		$this->load->library('form_validation');
		
		// carrega o modulo que tem o acesso aos dados
		$this->load->model('crud_model','crud');
		
		// gerencia a sessao entre Model -> Control -> View e aplicacao
		$this->load->library('session');
		
	}
	
	public function index(){
		
		$dados = array(
			'titulo'=>'Crud com CodeIgniter',
			'tela'=>''
		);
		
		$this->load->view('crud',$dados);	
	}
	
	public function create(){
		
		//mensagem de erro 
		$this->form_validation->set_message('required','O campo %s é obrigatório');
		$this->form_validation->set_message('alpha','O campo %s não aceita número e caracteres especiais');
		$this->form_validation->set_message('max_length','O campo %s passou do tamanho de %s caracteres');
		$this->form_validation->set_message('is_unique','O campo %s já está cadastrado no banco de dados');
		$this->form_validation->set_message('matches','O campo %s está diferente do campo %s ');
		
		
		// validacao 
		$this->form_validation->set_rules('nome','NOME','trim|required|alpha|max_length[50]|ucwords');
		$this->form_validation->set_rules('email','EMAIL','trim|required|strtolower|valid_email||max_lenght[50]|is_unique[curso_ci.email]');
		$this->form_validation->set_rules('login','LOGIN','trim|required|strtolower|max_lenght[50]|is_unique[curso_ci.login]');
		$this->form_validation->set_rules('senha','SENHA','trim|required|max_lenght[50]');
		$this->form_validation->set_rules('senha2','REPITA A SENHA','trim|required|max_lenght[50]|matches[senha]');
		//executa a validacao
		if($this->form_validation->run() == TRUE):
			//echo 'Validacao ok pode inserir no banco de dados';
			
			$dados = elements(array('nome','email','login','senha'), $this->input->post());
			$dados['senha'] = md5($dados['senha']);
			
			//print_r($dados);
			$this->crud->do_insert($dados);
		endif;
		
		$dados = array(
			'titulo'=>'Crud &raquo; Create',
			'tela'=>'create'
		);
		
		$this->load->view('crud',$dados);	
	}
	
	public function retrieve(){
		
		$dados = array(
			'titulo'=>'Crud &raquo; Retrieve',
			'tela'=>'retrieve'
		);
		
		$this->load->view('crud',$dados);	
	}
	
	public function update(){
		
		$dados = array(
			'titulo'=>'Crud &raquo; Update',
			'tela'=>'update'
		);
		
		$this->load->view('crud',$dados);	
	}
	
	public function delete(){
		
		$dados = array(
			'titulo'=>'Crud &raquo; Delete',
			'tela'=>'delete'
		);
		
		$this->load->view('crud',$dados);	
	}
	
}
	