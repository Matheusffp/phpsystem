<?php

$DBServidor = '127.0.0.1';
$DBUsuario = 'sistemaalunos';
$DBSenha = 'sistema';
$DBBanco = 'bancodealunos';

$conexaopainel = mysqli_connect($DBServidor, $DBUsuario, $DBSenha, $DBBanco);

if($conexaopainel == true){
    echo "banco Conectado!";
}else{
    echo "falha na conexão!";
}


function mostrar_alunos($conexaopainel){

    $sqlBusca = 'SELECT * FROM alunos';
    $resultado = mysqli_query($conexaopainel, $sqlBusca);

    $alunos = array();

    while ($aluno = mysqli_fetch_assoc($resultado)){
        $alunos[] = $aluno;
    }
    return $alunos;
}

function buscar_aluno($conexaopainel, $id){
    $sqlPega =  'SELECT * FROM alunos WHERE id = ' . $id;
    $resultado = mysqli_query($conexaopainel, $sqlPega);
    
    $alunos = array();

    while ($aluno = mysqli_fetch_assoc($resultado)){
        $alunos[] = $aluno;
    }
    return $alunos;

}
function gravar_aluno($conexaopainel, $aluno){
    $sqlGravar = "
    INSERT INTO alunos
    (id, nome, idcurso, datamatricula, endereco)
    VALUES
    (
        '{$aluno['id']}', 
        '{$aluno['nome']}', 
        '{$aluno['idcurso']}', 
        '{$aluno['datamatricula']}',
         '{$aluno['endereco']}'
         )";

    mysqli_query($conexaopainel, $sqlGravar); 
}

function edita_aluno($conexaopainel, $aluno){
    $sqlEdita = "
        UPDATE alunos SET 
                nome = '{$aluno['nome']}',
                idcurso = '{$aluno['idcurso']},
                datamatricula = '{$aluno['datamatricula']},
                endereco = '{$aluno['endereco']}
        WHERE id = {$aluno['id']}        
    ";
    mysqli_query($conexaopainel, $sqlEdita);
}

function remove_aluno($conexaopainel, $id){
$sqlRemover = "DELETE FROM alunos WHERE id = {$id}";
mysqli_query($conexaopainel, $sqlRemover);
}
