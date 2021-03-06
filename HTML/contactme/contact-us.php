<?php

// Init the Custom Configs
require_once 'configs.php';

// Custom Configs Overrides
// Put here some configs to override, this is useful if different configs are needed in a page with multiple different forms
// Example: $configs['recaptcha_enabled'] = false;

// Form fields array
// Here there are all the form fields ordered. One field for each line. You can simply add/edit one or more lines to make this definition equal to the html form code.
$fields = array();
$fields[] = array('name' => 'name',			'display_name' => 'Name',               	'type' => 'text',           'required' => true);
$fields[] = array('name' => 'phone',			'display_name' => 'Phone',              	'type' => 'tel',           'required' => true);
$fields[] = array('name' => 'email',		'display_name' => 'Email',            	'type' => 'email',           'required' => true);
$fields[] = array('name' => 'service',		'display_name' => 'Service',            	'type' => 'text',           'required' => true);
$fields[] = array('name' => 'message',		'display_name' => 'Message',            	'type' => 'Text',           'required' => true);

// Init the functions
require_once 'functions.php';

// Start processing
require_once 'process-upload.php';

?>
