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
	
	public function do_update($dados=NULL, $condicao=NULL){
		if($dados!=NULL && $condicao !=NULL):
			//echo 'estou no model e a variavel dados nao e null';
			$this->db->update('curso_ci',$dados,$condicao);
			// cria uma session 
			$this->session->set_flashdata('edicaook','Cadastro alterado com sucesso');
			// redireciona a mensagem de session acima para a view create pq set_flashdata e apenas fastfoward e so server para o proximo post.
			// com o redirec forco a limpeza da pagina e mando a mensagem de ok para a inclusao no banco de dados.
			// na pagina crud/create tenho q tratar essa mensagem
			
			//redirect('crud/create');
			redirect(current_url()); // esse metodo faz com que ele volte para a pagina que originou o post
		endif;
	}
	
	public function do_delete($condicao=NULL){
		if($condicao !=NULL):
			//echo 'estou no model e a variavel dados nao e null';
			$this->db->delete('curso_ci',$condicao);
			// cria uma session 
			$this->session->set_flashdata('excluirok','Registro excluído com sucesso');
			// redireciona a mensagem de session acima para a view create pq set_flashdata e apenas fastfoward e so server para o proximo post.
			// com o redirec forco a limpeza da pagina e mando a mensagem de ok para a inclusao no banco de dados.
			// na pagina crud/create tenho q tratar essa mensagem
			
			redirect('crud/retrieve');
		endif;
	}
	
	public function get_all()
	{
		return $this->db->get('curso_ci');
	}
	
	public function get_byid($id=NULL)
	{
		if ($id != NULL) :
			$this->db->where('id',$id);
			$this->db->limit(1);
			return $this->db->get('curso_ci');
		else :
			return FALSE;
		endif;
		
	}
}

