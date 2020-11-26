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
 * @link                http://aysad.pe.hu
 * @link-github         https://github.com/AysadKozanoglu/antpool-php-api.git
 * @project             antpool-php-api
 * @license             MIT license
 * @changes             expanding the config.php and custom.php for multipool accounts configuration api calls 
 *                      with pretty json output
 * @example             on the cli:  $  php antpool.php | python -m json.tool
 * @screencast		see example screenshot -> screencast_cli/antpool_api_php_multipool_json_output_example.png
 **/


// if you have only one antpool account than remove the array 1 (second)
// if you have more than 2 antpool accounts than expand the array like 2,3,4
class ant_config {

	// antpool users settings
        public $pools           = array( 0 =>   array(  "username"      => 'YOUR_ANTPOOL_USERNAME',
                                                        "api_key"       => 'YOUR_ANTPOOL_APIKEY',
                                                        "api_secret"    => 'YOUR_ANTPOOL_APISECRET'
                                                ),
                                         1 =>   array(  "username"       => 'YOUR_SECOND_ANTPOOL_USERNAME',
                                                        "api_key"        => 'YOUR_SECOND_ANTPOOL_APIKEY',
                                                        "api_secret"     => 'YOUR_SECOND_ANTPOOL_APISECRET'
                                                )
                                );

	// alerts
	public  $email 		= '';
	public  $mobile 	= '';

}
