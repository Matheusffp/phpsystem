<?php
include 'conexaopainel.php';
remove_aluno($conexaopainel, $_GET['id']);
header('Location: painel.php');
