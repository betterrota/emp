<?php
return array(
    'doctrine' => array(
        'connection' => array(
            // default connection name
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host'     => 'localhost',
                    'port'     => '3306',
                    'user'     => 'root',
                    'password' => '',
                    'dbname'   => 'comapp3',
					'charset' => 'utf8', // extra
					'driverOptions' => array(
							1002=>'SET NAMES utf8'
					)
                )
            )
        )
    ),
);