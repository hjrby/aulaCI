<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Geradorcodigo_model extends CI_Model{
	
	public function get_propriedades($nomeTabela=NULL)
	{
		if ($nomeTabela != NULL) :
			
			$this->db->select(
			'table_name,
			column_name,
			IS_NULLABLE,
			DATA_TYPE,
			CHARACTER_MAXIMUM_LENGTH,
			COLUMN_KEY');
			$this->db->from('information_schema.columns');	
			$this->db->where('table_name',$nomeTabela);
			return $this->db->get();
			
		else :
			
			return FALSE;
			
		endif;
	}
}