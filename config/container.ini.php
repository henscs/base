<?php
$config = [];
$config['container']['bind'] = [
    'app' => 'MrStock\MJC\App',
	'filter' => 'MrStock\MJC\Filter',
	'hook' => 'MrStock\MJC\Hook',
    'router' => 'MrStock\MJC\Route\AC',
	'error' => 'MrStock\MJC\Error',
    'response' => 'MrStock\MJC\Http\Response'
];

return $config;