<?php
use think\Env;

return array(
	'type'   =>'mysql',
	'hostname'   =>Env::get('DATABASE_HOSTNAME'),
	'hostport'   =>'3306',
	'database'   =>Env::get('DATABASE_NAME'),
	'username'   =>Env::get('DATABASE_USERNAME'),
	'password'   =>Env::get('DATABASE_PASSWORD'),
	'prefix'     =>'lz_',
	'charset'    => 'utf8',
	'resultset_type' => 'array',
	'fields_strict'  => true,
);