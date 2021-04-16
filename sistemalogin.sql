/* para que nosso sistema de login possa funcionar, devemos criar um banco de dados para armazenar nossos cadastros que serão autenticados: */
/*crie um banco chamado 'sistemalogin' */
/*crie a tabela:*/

CREATE TABLE login(
    id            INTEGER(20), NOT NULL PRIMARY KEY,
    senha         VARCHAR(100),
    usuario       VARCHAR(100)
)

/* depois de criada a tabela, podemos criar nosso usuário e nossa senha por meio da função md5() */

INSERT INTO login
(senha, usuario)

VALUES
(md5('senhauser1'), 'user1')

/*usamos o método md5() para evitar ataques SQLInjection.*/
/*feito isso, já podemos autenticar nosso sistema de login com nosso novo login e nossa nova senha.*/