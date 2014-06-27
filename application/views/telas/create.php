<?php
//echo basename(__FILE__);
echo form_open('crud/create');
echo validation_errors('<p>','</p>');
if ($this->session->flashdata('cadastrook')) :
	echo '<p>'.$this->session->flashdata('cadastrook').'</p>';
endif;
echo form_label('Nome completo');
echo form_input(array('name'=>'nome'),set_value('nome'),'autofocus');
echo form_label('email');
echo form_input(array('name'=>'email'),set_value('email'));
echo form_label('login');
echo form_input(array('name'=>'login'),set_value('login'));
echo form_label('senha');
echo form_input(array('name'=>'senha'),set_value('senha'));
echo form_label('Repita a senha');
echo form_input(array('name'=>'senha2'),set_value('senha2'));
echo form_submit(array('name'=>'cadastrar'),'Cadastrar');
echo form_close();