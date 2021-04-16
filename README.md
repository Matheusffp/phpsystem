# phpsystem
Ex de sistema de login + cadastro/edição/remoção de alunos de banco de dados mysql

Foi criado um sistema de autenticação de usuário, sendo necessário colocar login e senha cadastrados no banco de dados (user1, 'senhauser1').
Em seguida uma página de listagem de alunos cadastrados no sistema. Com um campo para busca direto no banco pela matrícula.
Funcionalidades de Adicionar aluno, Editar aluno e remover aluno também foram adicionadas.
Aquivo XML com os cursos foi importado para o banco como arquivo .CSV e armazenado na tabela 'cursos' no banco 'bancodecursos'.

O que faltou?
-sincronizar API de localização de CEP no cadastro dos alunos;
-funcionalidade de adicionar/remover curso.
-Eu não utilizei migrations para versionar os bancos do mysql, por isso você
encontrará os arquivos .sql com os scripts dos bancos. (utilizei o phpmyadmin para criar os bancos).


OBS: Resposta do item número 6 se encontra na pasta desafio.
