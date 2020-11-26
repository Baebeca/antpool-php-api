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
//
// @author              Aysad Kozanoglu
// @email               ak@linuxhowto.net
// @link                https://linuxhowto.net
// @project             antpool-php-api
// @licence             MIT licence
//


$jsonOutput = array (	"account" 	 => $ant->get('account'), 
		     	"hashrate" 	 => $ant->get('hashrate'),
			"workers" 	 => $ant->get('workers'),
                        "paymentHistory" => $ant->get('paymentHistory'), 
                        "poolStats" 	 => $ant->get('poolStats')
		    );

echo json_encode ($jsonOutput);

die();

?>

<!-- Examples -->
<pre>
	<?php print_r($ant->get('poolStats')); ?>
	</hr>
	<?php print_r($ant->get('account')); ?>
	</hr>
	<?php print_r($ant->get('hashrate')); ?>
	</hr>
	<?php print_r($ant->get('workers')); ?>
	</hr>
	<?php print_r($ant->get('paymentHistory')); ?>
    </hr>
	<?php print_r($ant->get('workers', 'BTC', 100)); ?>
    </hr>
	<?php print_r($ant->get('paymentHistory', 'BTC', 100)); ?>
</pre>
