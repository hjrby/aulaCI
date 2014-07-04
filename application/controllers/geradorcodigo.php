<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Geradorcodigo extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		// esse help trata da url amigavel
		$this->load->helper('url');
	}
	public function index()
	{
		// esse help server para organizar em array as informacoes do form para o model entre outros
		$this->load->helper('array');
		// carrega o modulo que tem o acesso aos dados e da um apelido para ele
		$this->load->model('geradorcodigo_model','gerador');
		
		
		/*
		$dados = array(
			'propriedades'=>$this->gerador->get_propriedades('cliente')->result(),
			'prop_array'=>$this->gerador->get_propriedades('cliente')->result_array(),
			'segmento'=> $this->uri->segment(3) == NULL ? 'information_schema.columns' : $this->uri->segment(3),
		);
		*/
		//colocar um nome de tabela valido no banco que esta na connection string para que ele nao gere nenhum um erro de null e ou offset
		$seg = $this->uri->segment(3) == NULL ? 'curso_ci' : $this->uri->segment(3);
		$dados = array(
			'propriedades'=>$this->gerador->get_propriedades($seg)->result(),
			'prop_array'=>$this->gerador->get_propriedades($seg)->result_array(),
			'segmento'=> $seg,
		);
		
		$this->load->view('geradorcodigo',$dados);
	}
	
	public function incluir()
	{
		
	}
	
	public function gitTeste()
	{
		
	}

	public function ex3()
	{
		$dados = array(
			'titulo' => 'Titulo recebido pelo controlador',
			'texto' => 'texto recebido pelo controlador',
			'menu'=>array(
				0=>'<a href="#">Home</a>',
				1=>'<a href="#">Sobre</a>',
				2=>'<a href="#">Servico</a>',
				3=>'<a href="#">Contato</a>',
			),
			'segmento'=>$this->uri->segment(3),
		);
		$this->load->view('exemplo3',$dados);
	}
}
