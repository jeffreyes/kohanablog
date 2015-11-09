<?php defined('SYSPATH') or die('No direct access allowed.');
 
return array
(
    'default' => array
    (
        'type'       => 'mysql',
        'connection' => array(
            'hostname'   => 'localhost',
            'database'   => 'kohana_blog',
            'username'   => 'root',
            'password'   => '',
            'persistent' => FALSE,
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => FALSE,
        'profiling'    => TRUE,
    )
);