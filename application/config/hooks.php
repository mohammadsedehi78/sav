<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['post_controller_constructor'] = array(
    'class'    => 'Language_loader',
    'function' => 'initialize',
    'filename' => 'Language_loader.php',
    'filepath' => 'hooks'
);

$hook['post_controller'] = array(
    'class'    => 'Last_url_loader',
    'function' => 'set_previous_uri',
    'filename' => 'Last_url_loader.php',
    'filepath' => 'hooks'
); 
