<?php
//echo basename(__FILE__);
echo form_open('crud/create');
echo form_label('Nome completo');
echo form_input(array('name'=>'nome'),'','autofocus');
echo form_label('email');
echo form_input(array('name'=>'email'));
echo form_label('login');
echo form_input(array('name'=>'login'));
echo form_label('senha');
echo form_input(array('name'=>'senha'));
echo form_label('Repita a senha');
echo form_input(array('name'=>'senha2'));
echo form_submit(array('name'=>'cadastrar'),'Cadastrar');
echo form_close();