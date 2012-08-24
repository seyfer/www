<?php defined('SYSPATH') or die('No direct access allowed.');

//настрйоки БД по дефолту, можно любые другие
return array
(
	'default' => array
	(
		'type'       => 'mysql',
		'connection' => array(
			'hostname'   => 'localhost',
			'database'   => 'don_koh',
			'username'   => 'root',
			'password'   => '',
			'persistent' => FALSE,
		),
		'table_prefix' => 'hay_',
		'charset'      => 'utf8',
		'caching'      => FALSE,
		'profiling'    => TRUE,
	),
);
