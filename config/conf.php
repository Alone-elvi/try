<?php
	$conf['charset'] = 'UTF-8';

	$conf['base_url'] = $_SERVER['DOCUMENT_ROOT'];
	$conf['index_page'] = 'index.php';

	$conf['controllers'] = 'controllers';
	$conf['view'] = 'view';
	$conf['models'] = 'models';

	$conf['controller']['blog']='blog.php';
	$conf['controller']['foto']='foto.php';

	$conf['model']['mdbase'] = 'mdbase.php';


	$conf['host']='localhost';
	$conf['dbname'] = 'try';
	$conf['user'] = 'root';
	$conf['db_password'] = 'root';
	$conf['db_table'] = '';

?>
