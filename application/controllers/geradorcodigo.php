<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Geradorcodigo extends CI_Controller {
	
	public function index()
	{
		// esse help server para organizar em array as informacoes do form para o model entre outros
		$this->load->helper('array');
		// carrega o modulo que tem o acesso aos dados e da um apelido para ele
		$this->load->model('geradorcodigo_model','gerador');
		
		
		
		$dados = array(
			'propriedades'=>$this->gerador->get_propriedades('cliente')->result(),
			'prop_array'=>$this->gerador->get_propriedades('cliente')->result_array()
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
