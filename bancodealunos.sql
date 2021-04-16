/* no bancodealunos, criar a tabela alunos:
*/

CREATE TABLE alunos(
    id              INTEGER(10) NOT NULL PRIMARY KEY
    nome            VARCHAR(30) NOT NULL
    idcurso         INTEGER(3)  NOT NULL
    datamatricula   DATE
    turma           INTEGER(5)
)

/* agora é necessário inserir alguns alunos para que sejam mostrados na listagem de alunos do painel principal de busca: */

INSERT INTO alunos
(id, nome, idcurso, datamatricula)

VALUES
(10416, 'Felipe vieira', 1, 20210322)



INSERT INTO alunos
(id, nome, idcurso, datamatricula)

VALUES
(10420, 'Bruno Henrique', 5, 20210415)



INSERT INTO alunos
(id, nome, idcurso, datamatricula)

VALUES
(10518, 'Pedro Henrique', 3, 20210512)



INSERT INTO alunos
(id, nome, idcurso, datamatricula)

VALUES
(10546, 'Laura Nogueira', 4, 20210122)

/* Agora basta procurar algum aluno pela matricula no buscador que o programa retonará os dados desse aluno separadamente.*/

/*importa lembrar que para essa conexão desse banco com nosso painel de busca aconteça, é necessário criar um usuário e uma senha 
dentro do banco pois não estamos usando o usuário 'root' na conexão.php. 
crie o usuario: 'sistemaalunos' com a senha: 'sistema' */
