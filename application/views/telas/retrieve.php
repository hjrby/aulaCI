<?php
//echo basename(__FILE__);

echo"<div class=\"container-fluid\">";
	echo "<div class=\"row\">";
		
		echo "<div class=\"col-md-2\">teste</div>";
		
		echo "<div class=\"col-md-8\">";
						
			echo '<h2>Lista de usuários</h2>';
			
			if ($this->session->flashdata('excluirok')) :
				echo '<p>'.$this->session->flashdata('excluirok').'</p>';
			endif;
			/*
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
			*/
			echo '<table class="table table-hover">' ;
				echo ' 
				<thead>
					<tr>
						<td>#</td>
						<td>Nome</td>
						<td>E-mail</td>
						<td>login</td>
						<td>Ação</td>
					</tr>
				</thead>
				<tbody>';
				foreach ($usuarios as $linha) {
					echo '<tr>';
						echo '<td>'.$linha->id.'</td>';
						echo '<td>'.$linha->nome.'</td>';
						echo '<td>'.$linha->email.'</td>';
						echo '<td>'.$linha->login.'</td>';
						echo '<td>'
						.anchor("crud/update/$linha->id",'<span class="glyphicon glyphicon-pencil"></span>').' - '
						.anchor("crud/delete/$linha->id",'<span class="glyphicon glyphicon-remove"></span>')
						.'</td>'
					.'</tr>';
				}
			echo '</tbody></table>';
			
			echo !empty($paginacao)? $paginacao : '' ;
		echo "</div>";
	
		echo "<div class=\"col-md-2\">.col-md-2</div>";
	
	echo "</div>";
echo "</div>";