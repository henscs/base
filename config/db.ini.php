<?php
$config['db']['appcode1'] = [
    'read' => [
        'host' => getenv('vendor_db_read_host'),
        'port' => getenv('vendor_db_read_port')
    ],
    'write' => [
        'host' => getenv('vendor_db_write_host'),
        'port' => getenv('vendor_db_write_port')
    ],
    'driver' => "mysqli",
    'name' => "appcode1.user",
    'user' => getenv('vendor_db_user'),
    'pwd' => getenv('vendor_db_pwd'),
    'charset' => "utf-8",
    'tablepre' => "su_"
];
$config['db']['appcode2'] = [
    'read' => [
        'host' => getenv('vendor_db_read_host'),
        'port' => getenv('vendor_db_read_port')
    ],
    'write' => [
        'host' => getenv('vendor_db_write_host'),
        'port' => getenv('vendor_db_write_port')
    ],
    'driver' => "mysqli",
    'name' => "appcode2.user",
    'user' => getenv('vendor_db_user'),
    'pwd' => getenv('vendor_db_pwd'),
    'charset' => "utf-8",
    'tablepre' => "su_"
];
return $config;