# antpool-php-api
Free Antpool PHP-API-Client ready to use. (https://www.antpool.com/)

pretty JSON output for handling with html or other thirdsParty like nodejs or angularJS

## Example
see under screencast_cli  screenshot for example output

# Initial Setup

Get files from Github repository

    $ git clone https://github.com/AysadKozanoglu/antpool-php-api.git
    $ cd antpool-php-api

Create you own config file and add antpool API access credentials

    $ cp config.sample.php config.php
    $ vim config.php

# Update
<pre>
    $ cd antpool-php-api
    $ git pull
</pre>

# Setup config.php
Create config.php
<pre>	
	cp config.sample.php config.php
</pre>

Enter your multiple API Access Details

	// multiple antpool users settings
<pre>
0 =>   array(  "username"      => 'YOUR_ANTPOOL_USERNAME',
               "api_key"       => 'YOUR_ANTPOOL_APIKEY',
               "api_secret"    => 'YOUR_ANTPOOL_APISECRET'
),
1 =>   array(  "username"       => 'YOUR_SECOND_ANTPOOL_USERNAME',
               "api_key"        => 'YOUR_SECOND_ANTPOOL_APIKEY',
               "api_secret"     => 'YOUR_SECOND_ANTPOOL_APISECRET'
)

</pre>	
_Username must be your Username, NOT your Account Email_   	   	

# How to use
Execute the file "antpool.php".

   minified json output
   <pre>
   $  php antpool.php
   </pre>
   or pretty json output with python -m json.tool
  <pre>
   $ php antpool.php | pyhton -m json.tool
  </pre>	

antpool.php will load configuration and needed libaries and execute a file wich is named "custom.php" if it is available.  
Feel free to create your own Codes in your "custom.php".

We does not overwrite the file "custom.php" in the future releases.

We deliver some example files, like default API lookups or email alerting if any worker does not has a hashrate and seems to be offline.

## Configure
You can set the following configurations in your "custom.php"  

    $ant->config('print_error_if_api_down', boolean); // default true

## Delivered example scripts:
- custom.example.php
    - Will show the output of all API methods
- custom-alert-worker-down.sample.php
    - Alert via Email / SMS if a worker has zero hashrate ans seems to be down
- custom-alert-balance-update.sample.php
    - Alert via Email / SMS if your balance changed

# Create custom checks
You are able to use all official antpool statements. Just call the API-Client with the statement that you want.  
Official API Documentation: https://v3.antpool.com/userApiGuide

Variable $currency can be: "BTC, LTC, ETH, ZEC" (default ist BTC)

Examples:
- Pool Stats
    - $ant->get('poolStats', $currency = 'BTC');
- Account balance
    - $ant->get('account', $currency = 'BTC');
- Hashrate
    - $ant->get('hashrate'); 
- Workers Hashrate
    - $ant->get('workers', $currency = 'BTC');
- Paymanet History
    - $ant->get('paymentHistory', $currency = 'BTC');

$ant->get() return a JSON decoded PHP array.  

# Crontab
Feel free to setup a sheduled check via Crontab

# Pricacy
- API calls works directly with official API from antpool  encrypted SSL
- All API request are encrypted by TLS

# Current Limitations
max 600 Request in 10min (official antpool api rules)
 -> https://v3.antpool.com/userApiGuide

# Contributors 
Ryan Oliver (https://github.com/xslugx)
Ayasd Kozanoglu (https://github.com/AysadKozanoglu)

# Forks
- Laravel PHP Facade/Antpool for the Antpool API (https://github.com/aburakovskiy/laravel-antpool-api)
