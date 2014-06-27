<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_model extends CI_Model{
	
	public function do_insert($dados=NULL)
	{
		//echo 'estou no model';
		if($dados!=NULL):
			//echo 'estou no model e a variavel dados nao e null';
			$this->db->insert('curso_ci',$dados);
			// cria uma session 
			$this->session->set_flashdata('cadastrook','Cadastro efetuado com sucesso');
			// redireciona a mensagem de session acima para a view create pq set_flashdata e apenas fastfoward e so server para o proximo post.
			// com o redirec forco a limpeza da pagina e mando a mensagem de ok para a inclusao no banco de dados.
			// na pagina crud/create tenho q tratar essa mensagem
			redirect('crud/create');
		endif;
	}
}

