<?php
//echo basename(__FILE__);
$iduser = $this->uri->segment(3);
if($iduser==NULL) redirect('crud/retrieve');
echo($iduser);
//pega um array do banco via id
$query = $this->crud->get_byid($iduser)->row();

echo form_open("crud/delete/$iduser");

echo form_label('Nome completo');
echo form_input(array('name'=>'nome'),set_value('nome',$query->nome),'disabled="disabled"');
echo form_label('email');
echo form_input(array('name'=>'email'),set_value('email',$query->email),'disabled="disabled"');
echo form_label('login');
echo form_input(array('name'=>'login'),set_value('login',$query->login),'disabled="disabled"');

echo form_submit(array('name'=>'cadastrar'),'Excluir Registro');
echo form_hidden('idusuario',$query->id);
echo form_close();