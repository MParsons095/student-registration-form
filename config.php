<?php
/**
 * Database Configuration
 */
$config = array();

$config['database']['host'] 		= 'localhost';				//database host
$config['database']['username'] 	= 'root';				//database username
$config['database']['password'] 	= '';			//database password
$config['database']['database_name'] = 'student_registration_form';	//database name


/**
 * Email configuration
 *
 * The email provided below will recieve all administrative notifications from
 * the student registration form.
 */
$config['admin_email'] = 'username@yourdomain.com';