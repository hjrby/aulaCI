<?php
$this->load->view('includes/header');
$this->load->view('includes/menu');
if($tela!=''): $this->load->view('includes/'.$tela);
$this->load->view('includes/footer');
