<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>GENERATOR JUNIRO TABAJARA</title>

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	    
		<!-- bootstrap vida cdn begin -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<!-- Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<!-- bootstrap vida cdn end -->
		<!--
		<style type="text/css">
			form{
				margin:10px;
			}
			form label {
				display:block;
			}
			form input[type=text]{
				width:250px;
				border:1px solid #ggg;
				padding:5px;
			}
			form input[type=password]{
				width:150px;
				border:1px solid #ggg;
				padding:5px;
			}
			form input[type=text]:focus, form input[type=password]:focus{
				border:1px solid #0cf;
			}
			form input[type=submit]{
				width:250px;
				border:1px solid #ggg;
				cursor: pointer;
				display: block;
				margin-top: 10px;
			}
		</style>
		-->
	</head>

	<body>
		<div >
				<?php 
				
				
					echo 'O segmento é => '.$segmento;
					//echo print_r($propriedades);
					echo '<table class="table table-hover">' ;
					echo ' 
						<thead>
							<tr>
								<td>nomeTabela</td>
								<td>nomeCampo</td>
								<td>Enulo</td>
								<td>Tipo</td>
								<td>Tamanho</td>
								<td>Primario</td>
							</tr>
						</thead>
						<tbody>';
					foreach ($propriedades as $propriedade) {
						echo '<tr>';
							echo '<td>'.$propriedade->table_name.'</td>';
							echo '<td>'.$propriedade->column_name.'</td>';
							echo '<td>'.$propriedade->IS_NULLABLE.'</td>';
							echo '<td>'.$propriedade->DATA_TYPE.'</td>';
							echo '<td>'.$propriedade->CHARACTER_MAXIMUM_LENGTH.'</td>';
							echo '<td>'.$propriedade->COLUMN_KEY.'</td>'
							
						.'</tr>';
					} 
					echo '</tbody></table>';
				?> 
			</div>
			
			<div>
				<h1>MODEL</h1>
				Passos:
				<pre>					
					<ul>
						<li> <?php echo 'criar uma arquivo em /application/model/ com o nome '.$prop_array[0]['table_name'].'_model.php <br> ex.: '.'/application/model/'.$prop_array[0]['table_name'].'_model.php'; ?></li>
						<li> <?php echo 'copiar o conteúdo abaixo no arquivo criado acima'; ?></li>
					</ul>
				</pre>
				<?php 
			echo '<pre>';	
echo '<?php if ( ! defined(\'BASEPATH\')) exit(\'No direct script access allowed\');'.'<br>';

echo 'class '.ucfirst($prop_array[0]['table_name']).'_model extends CI_Model{'.'<br>';
	
	echo 'public function do_insert($dados=NULL)'.'<br>';
	echo '{'.'<br>';
		echo 'if($dados!=NULL):'.'<br>';
			echo '$this->db->insert(\''.$prop_array[0]['table_name'].'\',$dados);'.'<br>';
			echo '// cria uma session '.'<br>';
			echo '$this->session->set_flashdata(\'cadastrook\',\'Cadastro efetuado com sucesso\');'.'<br>';
			echo '// redireciona a mensagem de session acima para a view create pq set_flashdata e apenas fastfoward e so server para o proximo post.'.'<br>';
			echo '// com o redirec forco a limpeza da pagina e mando a mensagem de ok para a inclusao no banco de dados.'.'<br>';
			echo '// na pagina crud/create tenho q tratar essa mensagem'.'<br>';
			echo 'redirect(\''.$prop_array[0]['table_name'].'/create\');'.'<br>';
		echo 'endif;'.'<br>';
	echo '}'.'<br>';
	
	echo 'public function do_update($dados=NULL, $condicao=NULL){'.'<br>';
		echo 'if($dados!=NULL && $condicao !=NULL):'.'<br>';
			echo '$this->db->update(\''.$prop_array[0]['table_name'].'\',$dados,$condicao);'.'<br>';
			echo '// cria uma session '.'<br>';
			echo '$this->session->set_flashdata(\'edicaook\',\'Cadastro alterado com sucesso\');'.'<br>';
			echo '// redireciona a mensagem de session acima para a view create pq set_flashdata e apenas fastfoward e so server para o proximo post.'.'<br>';
			echo '// com o redirec forco a limpeza da pagina e mando a mensagem de ok para a inclusao no banco de dados.'.'<br>';
			echo '// na pagina crud/create tenho q tratar essa mensagem'.'<br>';
			
			echo '//redirect(\''.$prop_array[0]['table_name'].'/create\');'.'<br>';
			echo 'redirect(current_url()); // esse metodo faz com que ele volte para a pagina que originou o post'.'<br>';
		echo 'endif;'.'<br>';
	echo '}'.'<br>';
	
	echo 'public function do_delete($condicao=NULL){'.'<br>';
		echo 'if($condicao !=NULL):'.'<br>';
			echo '$this->db->delete(\''.$prop_array[0]['table_name'].'\',$condicao);'.'<br>';
			echo '// cria uma session '.'<br>';
			echo '$this->session->set_flashdata(\'excluirok\',\'Registro excluído com sucesso\');'.'<br>';
			echo '// redireciona a mensagem de session acima para a view create pq set_flashdata e apenas fastfoward e so server para o proximo post.'.'<br>';
			echo '// com o redirec forco a limpeza da pagina e mando a mensagem de ok para a inclusao no banco de dados.'.'<br>';
			echo '// na pagina crud/create tenho q tratar essa mensagem'.'<br>';
			
			echo 'redirect(\''.$prop_array[0]['table_name'].'/retrieve\');'.'<br>';
		echo 'endif;'.'<br>';
	echo '}'.'<br>';
	
	echo 'public function get_all($limite, $offset)'.'<br>';
	echo '{'.'<br>';
		echo '$this->db->limit($limite,$offset);'.'<br>';
		echo 'return $this->db->get(\''.$prop_array[0]['table_name'].'\');'.'<br>';
	echo '}'.'<br>';
	
	echo 'public function get_byid($id=NULL)'.'<br>';
	echo '{'.'<br>';
		echo 'if ($id != NULL) :'.'<br>';
			echo '$this->db->where(\'id\',$id);'.'<br>';
			echo '$this->db->limit(1);'.'<br>';
			echo 'return $this->db->get(\''.$prop_array[0]['table_name'].'\');'.'<br>';
		echo 'else :'.'<br>';
			echo 'return FALSE;'.'<br>';
		echo 'endif;'.'<br>';
		
	echo '}'.'<br>';
echo '}'.'<br>'; // fim da classe
				
				echo '</pre>';
				?>
			</div>
			
			<div>
				<h1>VIEW</h1>
				Passos:
				<pre>					
					<ul>
						<li> <?php echo 'criar uma arquivo em /application/view/ com o nome '.$prop_array[0]['table_name'].'.php <br> ex.: '.'/application/view/'.$prop_array[0]['table_name'].'.php'; ?></li>
						<li> <?php echo 'copiar o conteúdo abaixo no arquivo criado acima'; ?></li>
					</ul>
				</pre>
				<pre>
					<?php
						echo htmlspecialchars('<?php').'<br>';
						echo '$this->load->view(\'includes/header\');'.'<br>';
						echo '$this->load->view(\'includes/menu\');'.'<br>';
						echo 'if($tela!=\'\') $this->load->view(\'telas/\'.$tela);'.'<br>';
						echo '$this->load->view(\'includes/footer\');'.'<br>';
					?>
				</pre>
				
				<ul>
					<li>
						<h3>VIEW CREATE</h3>
						Passos:
						<pre>					
							<ul>
								<li> <?php 
								echo 'criar uma arquivo em /application/view/telas/ com o nome '.$prop_array[0]['table_name'].'_create.php <br> ex.: '
								.'/application/view/telas/'.$prop_array[0]['table_name'].'_create.php'; ?>
								</li>
								<li> copiar o conteúdo abaixo no arquivo criado acima </li>
							</ul>
						</pre>
						<pre>
							<?php 
							
							// EXIBE NA TELA 
							echo htmlspecialchars('<?php').'<br>';
							echo htmlspecialchars('echo"<div class=\"container-fluid\">";').'<br>';
								echo htmlspecialchars('echo "<div class=\"row\">";').'<br>';
									
									echo htmlspecialchars('echo "<div class=\"col-md-2\">teste</div>";').'<br>';
									
									echo htmlspecialchars('echo "<div class=\"col-md-8\">";').'<br>';
										
										echo 'echo form_open(\''.$prop_array[0]['table_name'].'/create\',array(\'role\'=>\'form\'));'.'<br>';
										echo htmlspecialchars('if ($this->session->flashdata(\'cadastrook\')) :').'<br>';
											echo htmlspecialchars('echo \'<p>\'.$this->session->flashdata(\'cadastrook\').\'</p>\';').'<br>';
										echo htmlspecialchars('endif;').'<br>';
										foreach ($propriedades as $propriedade) {
											echo htmlspecialchars('echo "<div class=\"form-group\">";').'<br>';
											if($propriedade->COLUMN_KEY != 'PRI'):
												echo 'echo form_label(\''.$propriedade->column_name.'\',\'lbl'.$propriedade->column_name.'\',array(\'for\'=>\'input'.$propriedade->column_name.'1\'));'.'<br>';
												echo 'echo form_input(array(\'name\'=>\''.$propriedade->column_name.'\',\'class\'=>\'form-control\', \'id\'=>\'input'
												.$propriedade->column_name.'1\', \'placeholder\'=>\'Digite um valor \'),set_value(\''.$propriedade->column_name.'\'));'.'<br>';
												echo htmlspecialchars('echo form_error(\''.$propriedade->column_name.'\');').'<br>';
									
											endif;
											echo htmlspecialchars('echo "</div>";').'<br>';
										}	
											echo htmlspecialchars('echo "<div class=\"form-group\">";').'<br>';
												echo htmlspecialchars('echo form_submit(array(\'name\'=>\'cadastrar\',\'class\'=>\'btn btn-default\'),\'Cadastrar\');').'<br>';
											echo htmlspecialchars('echo "</div>";').'<br>';
											echo htmlspecialchars('echo form_close();').'<br>';
											
									echo htmlspecialchars('echo "</div>";').'<br>';
								
									echo htmlspecialchars('echo "<div class=\"col-md-2\">.col-md-2</div>";').'<br>';
								
								echo htmlspecialchars('echo "</div>";').'<br>';
							echo htmlspecialchars('echo "</div>";').'<br>';
				/*			
//GERA ARQUIVO FISICO
			
//$File = $_SERVER['DOCUMENT_ROOT'].'/application/view/telas/'.$prop_array[0]['table_name'].'_create.php';
//$File = '/application/view/telas/'.$prop_array[0]['table_name'].'_create.txt';
$File = $prop_array[0]['table_name'].'_create.php';
 //$File = "YourFile.txt"; 
$Handle = fopen($File, 'w');
$Data = 
htmlspecialchars('<?php').'<br>'.
htmlspecialchars('echo"<div class=\"container-fluid\">";').'<br>'.
htmlspecialchars('echo "<div class=\"row\">";').'<br>'.
htmlspecialchars('echo "<div class=\"col-md-2\">teste</div>";').'<br>'.
htmlspecialchars('echo "<div class=\"col-md-8\">";').'<br>'.
'echo form_open(\''.$prop_array[0]['table_name'].'/create\',array(\'role\'=>\'form\'));'.'<br>'.
htmlspecialchars('if ($this->session->flashdata(\'cadastrook\')):').'<br>'.
htmlspecialchars('echo \'<p>\'.$this->session->flashdata(\'cadastrook\').\'</p>\';').'<br>'.
htmlspecialchars('endif;').'<br>';
foreach ($propriedades as $propriedade) {
	$Data = $Data.htmlspecialchars('echo "<div class=\"form-group\">";').'<br>'.
	'echo form_label(\''.$propriedade->column_name.'\',\'lbl'.$propriedade->column_name.'\',array(\'for\'=>\'input'.$propriedade->column_name.'1\'));'.'<br>'.
	'echo form_input(array(\'name\'=>\''.$propriedade->column_name.'\',\'class\'=>\'form-control\', \'id\'=>\'input'
	.$propriedade->column_name.'1\', \'placeholder\'=>\'Digite um valor \'),set_value(\''.$propriedade->column_name.'\'));'.'<br>'.
	htmlspecialchars('echo form_error(\'nome\');').'<br>'.
	htmlspecialchars('echo "</div>";').'<br>';
}	
$Data = $Data.htmlspecialchars('echo "<div class=\"form-group\">";').'<br>'.
htmlspecialchars('echo form_submit(array(\'name\'=>\'cadastrar\',\'class\'=>\'btn btn-default\'),\'Cadastrar\');').'<br>'.
htmlspecialchars('echo "</div>";').'<br>'.
htmlspecialchars('echo form_close();').'<br>'.
htmlspecialchars('echo "</div>";').'<br>'.
htmlspecialchars('echo "<div class=\"col-md-2\">.col-md-2</div>";').'<br>'.
htmlspecialchars('echo "</div>";').'<br>'.
htmlspecialchars('echo "</div>";').'<br>'.
 
 
fwrite($Handle, $Data); 
print "Data Written"; 
fclose($Handle); 
//echo $File;
	*/						?>
						</pre>
				    </li>
					
					<li>
						<h3>VIEW DELETE</h3>
						Passos:
						<pre>					
							<ul>
								<li> <?php 
								echo 'criar uma arquivo em /application/view/includes/ com o nome '.$prop_array[0]['table_name'].'_delete.php <br> ex.: '
								.'/application/view/'.$prop_array[0]['table_name'].'_delete.php'; ?>
								</li>
								<li> copiar o conteúdo abaixo no arquivo criado acima </li>
							</ul>
						</pre>
						<pre>
							
						</pre>
				    </li>
					
					<li>
						<h3>VIEW EDITE</h3>
						Passos:
						<pre>					
							<ul>
								<li> <?php 
								echo 'criar uma arquivo em /application/view/includes/ com o nome '.$prop_array[0]['table_name'].'_edite.php <br> ex.: '
								.'/application/view/'.$prop_array[0]['table_name'].'_edite.php'; ?>
								</li>
								<li> copiar o conteúdo abaixo no arquivo criado acima </li>
							</ul>
						</pre>
						<pre>
							
						</pre>
				    </li>
					
					<li>
						<h3>VIEW RETRIEVE</h3>
						Passos:
						<pre>					
							<ul>
								<li> <?php 
								echo 'criar uma arquivo em /application/view/includes/ com o nome '.$prop_array[0]['table_name'].'_retrieve.php <br> ex.: '
								.'/application/view/'.$prop_array[0]['table_name'].'_retrieve.php'; ?>
								</li>
								<li> copiar o conteúdo abaixo no arquivo criado acima </li>
							</ul>
						</pre>
						<pre>
							
						</pre>
				    </li>
				</ul>
				
			</div>
			
			
			<div>
				<h1>CONTROLLER</h1>
				
				<?php 
				echo '<pre>';
					//echo print_r($propriedades);
					$prop;
					echo '<p>'.htmlspecialchars('<?php if ( ! defined(\'BASEPATH\')) exit(\'No direct script access allowed\');').'</p>';

					echo 'class '.ucfirst($prop_array[0]['table_name']).' extends CI_Controller{';
					
					
					echo 'public function __construct(){'.'<br>';
						echo 'parent::__construct();'.'<br>';
						echo '// esse help trata da url amigavel'.'<br>';
						echo '$this->load->helper(\'url\');'.'<br>';
						echo '// esse help serve para simplificar a criacao de um form'.'<br>';
						echo '$this->load->helper(\'form\');'.'<br>';
						echo '// esse help server para organizar em array as informacoes do form para o model entre outros'.'<br>';
						echo '$this->load->helper(\'array\');'.'<br>';
						echo '// carrega a parte de validacao do form do codeigniter'.'<br>';
						echo '$this->load->library(\'form_validation\');'.'<br>';
						
						echo '// carrega o modulo que tem o acesso aos dados e da um apelido para ele'.'<br>';
						echo '$this->load->model(\''.$prop_array[0]['table_name'].'_model\',\''.$prop_array[0]['table_name'].'_model\');'.'<br>';
						
						echo '// gerencia a sessao entre Model -> Control -> View e aplicacao'.'<br>';
						echo '$this->load->library(\'session\');'.'<br>';
						
						echo '// gerencia uma tabela na view'.'<br>'; 
						echo '$this->load->library(\'table\');'.'<br>';
						
						echo '// gerencia a paginacao '.'<br>';
						echo '$this->load->library(\'pagination\');'.'<br>';						
					echo '}'.'<br>';
					
					
					echo 'public function index(){'.'<br>';
		
						echo '$dados = array('.'<br>';
							echo '\'titulo\'=>\''.$prop_array[0]['table_name'].'\','.'<br>';
							echo '\'tela\'=>\'\''.'<br>';
						echo ');'.'<br>';
						
						echo '$this->load->view(\''.$prop_array[0]['table_name'].'\',$dados);'.'<br>';	
					echo '}'.'<br>';
					
					
					
					echo 'public function create(){'.'<br>';
		
						echo '//mensagem de erro'.'<br>'; 
						echo '$this->form_validation->set_message(\'required\',\'O campo %s é obrigatório\');'.'<br>';
						echo '$this->form_validation->set_message(\'alpha\',\'O campo %s não aceita número e caracteres especiais\');'.'<br>';
						echo '$this->form_validation->set_message(\'max_length\',\'O campo %s passou do tamanho de %s caracteres\');'.'<br>';
						echo '$this->form_validation->set_message(\'is_unique\',\'O campo %s já está cadastrado no banco de dados\');'.'<br>';
						echo '$this->form_validation->set_message(\'matches\',\'O campo %s está diferente do campo %s \');'.'<br>';
						
						echo '// validacao '.'<br>';
					foreach ($propriedades as $propriedade) {
						if($propriedade->COLUMN_KEY != 'PRI'):
							$v_required = $propriedade->IS_NULLABLE == 'NO' ? '|required' : '';
							$v_max_length = $propriedade->DATA_TYPE == 'varchar' ? '|max_length['.$propriedade->CHARACTER_MAXIMUM_LENGTH.']' : '';
							//echo $v_max_length;
							echo '$this->form_validation->set_rules(\''.$propriedade->column_name.'\',\''.strtoupper($propriedade->column_name).'\',\'trim'.$v_required.$v_max_length.'\');'.'<br>';
						endif;
						
					} 
						echo '//executa a validacao'.'<br>';
						echo 'if($this->form_validation->run() == TRUE):'.'<br>';
							echo '//echo \'Validacao ok pode inserir no banco de dados\';'.'<br>';
					
							$form_elements = '$dados = elements(array(';
					foreach ($propriedades as $propriedade) {
						if($propriedade->COLUMN_KEY != 'PRI'):		
							//echo '$dados = elements(array(\'nome\',\'email\',\'login\',\'senha\'), $this->input->post());'.'<br>';
							$form_elements = $form_elements.'\''.$propriedade->column_name.'\',';
						endif;
					}		
							echo substr($form_elements,0,strlen($form_elements)-2).'\'), $this->input->post());'.'<br>';
							//echo '//print_r($dados);'.'<br>';
							echo '$this->'.$prop_array[0]['table_name'].'_model->do_insert($dados);'.'<br>';
						echo 'endif;'.'<br>';
						
						echo '$dados = array('.'<br>';
							echo '\'titulo\'=>\''.$prop_array[0]['table_name'].' &raquo; Create\','.'<br>';
							echo '\'tela\'=>\''.$prop_array[0]['table_name'].'_create\''.'<br>';
						echo ');'.'<br>';
						
						echo '$this->load->view(\''.$prop_array[0]['table_name'].'\',$dados);	'.'<br>';
					echo '}'.'<br>';
					
					echo 'public function retrieve($offset=0){ //inicializa a variavel do offset para nao dar pau'.'<br>';
		
						echo '/* paginacao begin */'.'<br>';
						echo '$limite = 2;'.'<br>';
						
						echo '$config[\'base_url\'] = base_url().\'/'.$prop_array[0]['table_name'].'/retrieve/\';'.'<br>';
						echo '$config[\'total_rows\'] = $this->db->get(\''.$prop_array[0]['table_name'].'\')->num_rows(); //estou pegando direto sem passar pelo model pq o metodo get_all precisa dos parametros de limite/offset - q e tipo um incremento ex. de 5 em 5 ou 2 em 2'.'<br>';
						echo '$config[\'per_page\'] = $limite; '.'<br>';
						
						echo '$this->pagination->initialize($config);'.'<br>';
						echo '// lenbrando que a paginacao ainda esta no array de dados e na pagina que traz o resultado ... retrieve que onde ele exibi a paginacao propriamente dita   '.'<br>';
						echo '/* paginacao end */'.'<br>';
						
						echo '$dados = array('.'<br>';
							echo '\'titulo\'=>\''.$prop_array[0]['table_name'].' &raquo; Retrieve\','.'<br>';
							echo '\'tela\'=>\'retrieve\','.'<br>';
							echo '\'usuarios\'=>$this->crud->get_all($limite,$offset)->result(), //limite e offset definem a paginacao ou seja o numero de itens na pagina e de qtos em qtos registro devo  mover '.'<br>';
							echo '\'paginacao\'=>$this->pagination->create_links()'.'<br>';
						echo ');'.'<br>';
						
						echo '$this->load->view(\''.$prop_array[0]['table_name'].'\',$dados);	'.'<br>';
					echo '}'.'<br>';
					echo '}'.'<br>'; //fecha a classe
					/*
					echo '<table class="table table-hover">' ;
					echo ' 
						<thead>
							<tr>
								<td>nomeTabela</td>
								<td>nomeCampo</td>
								<td>Enulo</td>
								<td>Tipo</td>
								<td>Tamanho</td>
								<td>Primario</td>
							</tr>
						</thead>
						<tbody>';
					 * */
					foreach ($propriedades as $propriedade) {
						/*
						echo '<tr>';
							echo '<td>'.$propriedade->table_name.'</td>';
							echo '<td>'.$propriedade->column_name.'</td>';
							echo '<td>'.$propriedade->IS_NULLABLE.'</td>';
							echo '<td>'.$propriedade->DATA_TYPE.'</td>';
							echo '<td>'.$propriedade->CHARACTER_MAXIMUM_LENGTH.'</td>';
							echo '<td>'.$propriedade->COLUMN_KEY.'</td>'
							
						.'</tr>';
						*/
						
						
					} 
					echo '</tbody></table>';
					echo '</pre>';
				?> 
			</div>

			<footer>
				<p>
					&copy; Copyright  by HJRBY
				</p>
			</footer>
		</div>
	</body>
</html>
