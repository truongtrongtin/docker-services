<?php
require_once('plugins/login-servers.php');

return new AdminerLoginServers([
	'PostgreSQL' => [
		'server' => 'postgres',
		'driver' => 'pgsql',
	]
]);
