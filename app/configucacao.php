<?php
//Definir constantes no array

define('DB',[
    'HOST' => 'localhost',
    'USUARIO' => 'root',
    'SENHA' => '',
    'BANCO' => 'framework',
    'PORTA' => '3306'
]);



//dirname elimina o diretorio atual
//Define define uma constante
define('APP',dirname(__FILE__));
define('URL','http://localhost/framework');
define('APP_NOME','Curso de PHP 7 e MVC');
const APP_VERSION = '1.0.0';