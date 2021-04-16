<?php

/*Conexão com o BD mysql:*/ 

$DBServidor = '127.0.0.1';
$DBUsuario = 'sistemalogin';
$DBSenha = 'senhabancologin';
$DBBanco = 'sistemalogin';

$conexao = mysqli_connect($DBServidor, $DBUsuario, $DBSenha, $DBBanco);

/*rapida verificação de conexão:
     
if($conexao == true){
    echo "banco conectado!";
}else{
    echo "Não conectado. Verifique a Conexão.";
}
*/