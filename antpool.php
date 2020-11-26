<?php
/*!
 * @author		Sebastian Lutz
 * @copyright	Baebeca Solutions - Lutz
 * @email		lutz@baebeca.de
 * @pgp			0x5AD0240C
 * @link		https://www.baebeca.de
 * @link-github	https://github.com/Elompenta/antpool-php-api
 * @customer	-
 * @project		antpool-php-api
 * @license		GNU GENERAL PUBLIC LICENSE Version 2
 **/

/*!
 * @author              Aysad Kozanoglu
 * @email               aysadx@tuta.io
 * @link                http://www.hashrate24.com
 * @link-github         https://github.com/AysadKozanoglu/antpool-php-api.git
 * @project             antpool-php-api
 * @license             MIT license
 * @changes             expanding the config.php and custom.php for multipool Account configuration api calls 
 *                      with pretty json output
 * @example             on the cli:  $  php antpool.php | python -m json.tool
 * @screencast          see example screenshot -> screencast_cli/antpool_api_php_multipool_json_output_example.png
 **/


// load classes
error_reporting(E_ALL);
require_once(__DIR__.'/classes/antpool.php');

// check if custom config file exist
if (file_exists(__DIR__.'/config.php')) {
	require_once(__DIR__.'/config.php');
} else {
	exit('please create your own config.php based on config.sample.php');
}

// init antpool class
$ant_config = new ant_config();

//$ant 	= new antpool($ant_config->username, $ant_config->api_key, $ant_config->api_secret);

// for multiple antpool users
for ($i=0; $i<count($ant_config->pools);$i++){
        $ant[$i]  = new antpool($ant_config->pools[$i]["username"], $ant_config->pools[$i]["api_key"], $ant_config->pools[$i]["api_secret"]);
}


// check if custom.php exist and execute
if (file_exists(__DIR__.'/custom.php')) {
	require_once(__DIR__.'/custom.php');
} else {
	require_once(__DIR__.'/custom.sample.php');
}

unset($ant);
