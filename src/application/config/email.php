<?php defined('BASEPATH') OR exit('No direct script access allowed');

// Add custom values by settings them to the $config array.
// Example: $config['smtp_host'] = 'smtp.gmail.com'; 
// @link https://codeigniter.com/user_guide/libraries/email.html

$config['useragent'] = 'Idana Calendar';
$config['protocol'] = 'smtp'; // mail or smtp
$config['mailtype'] = 'html'; // or 'text'
$config['smtp_host'] = Config::SMTP_HOST;
$config['smtp_user'] = Config::SMTP_USER;
$config['smtp_pass'] = Config::SMTP_PASS;
$config['smtp_crypto'] = Config::SMTP_CRYPTO;
$config['smtp_port'] = Config::SMTP_PORT;
