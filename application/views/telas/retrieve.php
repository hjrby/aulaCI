<?php
//echo basename(__FILE__);

echo '<h2>Lista de usuários</h2>';

if ($this->session->flashdata('excluirok')) :
	echo '<p>'.$this->session->flashdata('excluirok').'</p>';
endif;

$this->table->set_heading('ID','Nome','E-mail','Login','Operações');
foreach ($usuarios as $linha) {
	$this->table->add_row(
		$linha->id,
		$linha->nome,
		$linha->email,
		$linha->login,
		anchor("crud/update/$linha->id",'Editar').' - '.
		anchor("crud/delete/$linha->id",'Excluir')
		);
}
echo $this->table->generate();