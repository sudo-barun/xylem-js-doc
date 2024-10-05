<?php

return [
	'PROTOCOL' => ($_SERVER['REQUEST_SCHEME'] ?? 'http'),
	'DOMAIN' => $_SERVER['SERVER_NAME'] ?? 'localhost',
	'BASE_PATH' => '/',
];
