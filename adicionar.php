<?php
include 'conexaopainel.php';
session_start();
?>

<html>
<head>
    <meta charset="utf-8" />
    <title>adicionar aluno</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <h1>ADICIONAR ALUNO:</h1>
    <form>
        <fieldset>
            <legend>Nova aluno</legend>
            <label>
                Matricula:
                <input type="text" name="id" />
            </label>
            <label>
                Nome:
                <input type="text" name="nome" />
            </label>
            <label>
                Endereço:
                <input type="text" name="endereco" />
            </label>
            <label>
                Idcurso:
                <input type="text" name="idcurso" />
            </label>
            <label>
                 Data da Matrícula(apenas números ex:20210416):
                <input type="text" name="datamatricula" />
            </label>
            </fieldset>
            <label>
                Aluno Ativo:
                <input type="checkbox" name="atividade" value="sim" />
            </label>
            <input type="submit" value="Cadastrar" />
        </fieldset>
    </form>

<?php


if (isset($_GET['id']) && $_GET['id'] != '') {
    $aluno = array();

    $aluno['id'] = $_GET['id'];

    if (isset($_GET['nome'])) {
        $aluno['nome'] = $_GET['nome'];
    } else {
        $aluno['nome'] = '';
    }
    if (isset($_GET['endereco'])) {
        $aluno['endereco'] = $_GET['endereco'];
    } else {
        $aluno['endereco'] = '';
    }

    if (isset($_GET['idcurso'])) {
        $aluno['idcurso'] = $_GET['idcurso'];
    } else {
        $aluno['idcurso'] = '';
    }

    $aluno['datamatricula'] = $_GET['datamatricula'];

    if (isset($_GET['atividade'])) {
        $aluno['atividade'] = $_GET['atividade'];
    } else {
        $aluno['atividade'] = '';
    }

    gravar_aluno($conexaopainel, $aluno);
     header('Location: painel.php');
}

