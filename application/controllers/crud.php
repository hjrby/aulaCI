<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends CI_Controller {
	
	public function index(){
		
		$dados = array(
			'titulo'=>'Crud com CodeIgniter',
			'tela'=>'',
		);
		
		$this->load->view('crud',$dados);	
	}
}
	