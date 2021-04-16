<?php 
include 'verifica_login.php';
include 'conexaopainel.php';
?>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Encontrar aluno</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    
    <div class = "identificacao">
        <h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
            <h3><a href="logout.php">Sair</a></h3> </div>
    <body>

<section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Buscador de alunos:</h3>
                    <h3 class="title has-text-grey"><a href="https://aix.com.br/" target="_blank">AIX Sistemas</a></h3>               
                    <div class="box">
                        <form>
                            <div class="field">
                                <div class="control">
                                    <input name="id" name="text" class="input is-large" placeholder="Digite a matricula de um aluno" autofocus="">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Procurar</button>
                            <strong><a href ="adicionar.php">Adicionar um aluno</a></strong>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <table class="table">
  <thead>
    <tr>
      <th>Matricula</th>
      <th>Nome</th>
      <th>id_Curso</th>
      <th>Data Matrícula</th>
      <th>Opções</th>

    </tr>
  </thead>
  <tbody>

      <?php if(isset($_GET['id'])){
        $alunos = buscar_aluno($conexaopainel, $_GET['id']);
      }else{
        $alunos = mostrar_alunos($conexaopainel);
      }
      ?>
      
      <?php foreach($alunos as $aluno):?>
    <tr>
      <th><?php echo $aluno['id']?></th>
      <td><?php echo $aluno['nome']?></td>
      <td><?php echo $aluno['idcurso']?></td>
      <td><?php echo $aluno['datamatricula']?></td>
      <td> <!-- O campo com os links para editar e remover -->
            <a href="formulario.php?id=<?php echo $aluno['id']; ?> ">
                Editar
            </a>
            <a href="remover.php?id=<?php echo $aluno['id']; ?> ">
                Remover
            </a>

      </td>
      <?php endforeach; ?>
    </tr>

</tbody>


    </section>
