<?php

return [
	'driver' => 'eloquent',
	'model' => 'DreamFactory\Laravel\Grubworm\User',
	'table' => 'users',
	'password' => [
		'email' => 'emails.password',
		'table' => 'password_resets',
		'expire' => 60,
	],
];
