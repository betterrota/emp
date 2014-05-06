<?php
return array(
	'mail' => array(
		'transport' => array(
			'options' => array(
				'host'              => 'smtp.gmail.com',
				'connection_class'  => 'login',
				'port' => '465',
				'connection_config' => array(
					'username' => 'mriahi84@gmail.com',
					'password' => 'perspolice',
					'ssl' => 'ssl'
				),
			),  
		),
	),
);