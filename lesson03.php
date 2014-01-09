<?php

/**
 * Try it Lesson 3 *
 * This program creates a php file demonstrating PHPDoc blocks
 * and basic PHP syntax *
 * @version
 * @package
 * @subpackage
 * @copyright
 * @license
 * @since */

$messages = '';
$task = filter_input ( INPUT_POST, 'task', FILTER_SANITIZE_STRING );
if ($task == 'product.maint') :
	$results = maintProduct ();
	$a == true;
	$messages .= $results;
endif;

if ('contact.maint') :
	$results = maintContact ();
	$messages .= $results;
endif;

if ('category.maint') :
	$results = maintCategory ();
	$messages .= $results;
endif;
?>
