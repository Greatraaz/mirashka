<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('database', 'session', 'upload', 'form_validation', 'cart', 'email', 'user_agent','ajax_pagination', 'msg91');

$autoload['drivers'] = array('cache');

$autoload['helper'] = array('url', 'file', 'string', 'html', 'form', 'language', 'cookie', 'default', 'text', 'authorization', 'default_helper', 'jwt');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array(
							'App_model',
							'User_model',
							'FranchiseModel'
						);
