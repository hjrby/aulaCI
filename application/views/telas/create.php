<?php
//echo basename(__FILE__);
echo"<div class=\"container-fluid\">";
	echo "<div class=\"row\">";
		
		echo "<div class=\"col-md-2\">teste</div>";
		
		echo "<div class=\"col-md-8\">";
			
			echo form_open('crud/create',array('role'=>'form'));
			//echo validation_errors('<p>','</p>');
			if ($this->session->flashdata('cadastrook')) :
				echo '<p>'.$this->session->flashdata('cadastrook').'</p>';
			endif;
				echo "<div class=\"form-group\">";
					echo form_label('Nome completo','lblNome',array('for'=>'inputNome'));
					echo form_input(array('name'=>'nome','class'=>'form-control', 'id'=>'inputNome1', 'placeholder'=>'Digite seu nome'),set_value('nome'),'autofocus');
					echo form_error('nome');
				echo "</div>";
				echo "<div class=\"form-group\">";
					echo form_label('email','lblEmail',array('for'=>'inputEmail'));
					echo form_input(array('name'=>'email','class'=>'form-control', 'id'=>'inputEmail', 'placeholder'=>'Digite seu e-mail'),set_value('email'));
					echo form_error('email');
				echo "</div>";
				echo "<div class=\"form-group\">";
					echo form_label('login','lblLogin',array('for'=>'inputLogin'));
					echo form_input(array('name'=>'login','class'=>'form-control', 'id'=>'inputLogin', 'placeholder'=>'Digite seu login'),set_value('login'));
					echo form_error('login');
				echo "</div>";
				echo "<div class=\"form-group\">";
					echo form_label('senha','lblSenha',array('for'=>'inputSenha'));
					echo form_input(array('name'=>'senha','class'=>'form-control', 'type'=>'password','id'=>'inputSenha', 'placeholder'=>'Digite sua senha'),set_value('senha'));
					echo form_error('senha');
				echo "</div>";
				echo "<div class=\"form-group\">";
					//echo form_label('Repita a senha',array('for'=>'inputSenha2'));
					echo form_input(array('name'=>'senha2','class'=>'form-control', 'type'=>'password','id'=>'inputSenha2', 'placeholder'=>'confirme sua senha'),set_value('senha2'));
					echo form_error('senha2');
				echo "</div>";
				echo "<div class=\"form-group\">";
					echo form_submit(array('name'=>'cadastrar','class'=>'btn btn-default'),'Cadastrar');
				echo "</div>";
				echo form_close();
				
		echo "</div>";
	
		echo "<div class=\"col-md-2\">.col-md-2</div>";
	
	echo "</div>";
echo "</div>";
