<?php
session_start();
session_destroy();
header('location: index.php');
exit();

//se quisermos destruir somente uma sessão podemos usar o unset. mas se quisermos destruir todas as sessões, usamos o session_destroy().