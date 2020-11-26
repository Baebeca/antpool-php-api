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

// rename this file to custom.php and
// do you own stuff in this file
// we will never overrite this file

?>
<?php
/*!
 * @author              Aysad Kozanoglu
 * @email               aysadx@tuta.io
 * @link                http://www.aysad.pe.hu
 * @link-github         https://github.com/AysadKozanoglu/antpool-php-api.git
 * @project             antpool-php-api
 * @license             MIT license
 * @changes             expanding the config.php and custom.php for multipoolsi configuration api calls 
 *                      with pretty json output
 * @example             on the cli:  $  php antpool.php | python -m json.tool
 * @screencast          see example screenshot -> screencast_cli/antpool_api_php_multipool_json_output_example.png
 **/


$arrayData = array();

for ($a=0;$a<count($ant); $a++){
	array_push (	$arrayData, 
		 array	(	"account" 	   => $ant[$a]->get('account'), 
			  	"hashrate" 	   => $ant[$a]->get('hashrate'),
			  	"workers" 	   => $ant[$a]->get('workers'),
                          	"paymentHistory"   => $ant[$a]->get('paymentHistory'), 
                          	"poolStats" 	   => $ant[$a]->get('poolStats')
		)
	);
	$arrayOutput["pool-".$a] = $arrayData;
};

echo json_encode ($arrayOutput);

die();

?>
