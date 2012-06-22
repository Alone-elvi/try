<?php
global $conf;
	$conf = array (
	'charset' => 'UTF-8',
	'base_url' => $_SERVER['DOCUMENT_ROOT'],
	'index_page' =>  'index.php',
	'controllers' => 'controllers',
	'view' => 'view',
	'models' => 'models',
	'curr_req' => '',
	'controller' => array ('blog' => 'blog.php',
												'foto' => 'foto.php'),
	'model' => array ('mdbase' => 'mdbase.php'),
	'host' => 'localhost',
	'dbname' => 'try',
	'user' => 'root',
	'db_password' => 'root',
	'db_table' => ''
);
/*	$conf['charset'] = 'UTF-8';

	$conf['base_url'] = $_SERVER['DOCUMENT_ROOT'];
	$conf['index_page'] = 'index.php';

	$conf['controllers'] = 'controllers';
	$conf['view'] = 'view';
	$conf['models'] = 'models';

	$conf['curr_req'] = '';

	$conf['controller']['blog']='blog.php';
	$conf['controller']['foto']='foto.php';

	$conf['model']['mdbase'] = 'mdbase.php';


	$conf['host']='localhost';
	$conf['dbname'] = 'try';
	$conf['user'] = 'root';
	$conf['db_password'] = 'root';
	$conf['db_table'] = '';
*/
?>
