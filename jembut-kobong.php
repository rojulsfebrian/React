<?php
echo
"\033[1;32m
                                                                                          
                                 |[ D-error Cyber4rt ]|
                 #####################################################
                 #               AUTO REACTION FACEBOOK              #
                 #                     Powered By:                   #
                 #                                                   #
                 #                   ROJULS FEBRIAN                  #
                 #                                                   #
                 #      Do Not Use This Tool For IllegaL Purpose     #
                 #####################################################
\n";

require_once('lib/fb.php');

//////////////////////////////////////////////[edit authentication here]///////////////////////////////////////////
$user		= 'error403.phtml'; // facebook username / email
$pass 		= 'priscill@@22'; // facebook passwod
$r_male		= '2'; // reaction if user male , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8
$r_female	= '2'; // reaction if user female , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8
$max_status	= '1000'; // maximum reacted status
$token 		= 'EAAAAAYsX7TsBAMLQUQhQhqtmBour4v1XdmRUWIoINGZBx5gin18VZCOTnu1baI8r1zenVgTaXykPP9uBMj82ybYrk6nwqK90jQId3mqJbDE9PxPpsraOO4kjIiOPY0bdaP6IFTwp4CLsAmV3EI8ZCKGBiDQFQH5IYkHAd5ZANUwZCjwH5oIZBuhUxZCuIJO2ltqxbuy36sEL05wj5ALqpdX';
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$config['cookie_file'] = 'cookie.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}

$reaction = new Reaction();
$reaction->send_reaction($user, $pass, $token, $r_male, $r_female, $max_status);
