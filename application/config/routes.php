<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']   = 'Template';
$route['administrator']        = 'dashboard/Administrator';
$route['acessar']              = 'dashboard/Administrator/doAutenticar';
$route['dashhome']             = 'dashboard/home';
$route['categoria']            = 'dashboard/categoria';
$route['core']                 = 'dashboard/categoria/core';
$route['categoriaModulo']      = 'dashboard/categoria/modulo';
$route['sair']                 = 'dashboard/Administrator/sair';
$route['404_override']         = '';
$route['translate_uri_dashes'] = FALSE;
