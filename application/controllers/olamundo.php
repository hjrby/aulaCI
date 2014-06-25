<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Olamundo extends CI_Controller {
	
	public function index()
	{
		$this->load->view('olamundo');
	}
	
	public function incluir()
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
