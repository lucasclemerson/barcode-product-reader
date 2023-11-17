<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login'] = 'admin/login';
$route['recuperar_acesso'] = 'admin/recuperar_acesso';
$route['cadastrar'] = 'admin/cadastrar';
$route['sair'] = 'admin/sair';