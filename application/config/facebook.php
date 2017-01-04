<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config['appId']	= '847707098624226';
$config['secret']	= '23293985e18beb351a352a1092cc5195';

$config['facebook_login_parameters'] = array(
											'scope' => 'email, publish_actions',
											'redirect_uri' => 'http://event.choosewellnessexpo.com:15001/home/fb',
											'display' => 'page'
											); 