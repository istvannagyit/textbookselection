<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.


if (!empty($_SERVER['HTTP_HOST']) && strpos($_SERVER['HTTP_HOST'], 'localhost') === FALSE) {
    // Parse the json file with ADDONS credentials
    $string = file_get_contents($_ENV['CRED_FILE'], false);

    if ($string == false) {
        die('FATAL: Could not read credentials file');
    }

    $creds = json_decode($string, true);
}

   


return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'The Hill - Textbooks',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'gii',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			//'ipFilters'=>array('127.0.0.1','localhost'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
    		'caseSensitive'=>false,  
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		
				/*	
					
			   Settings
			   MYSQLS_DATABASE          : depkuwtcu49
			   MYSQLS_PASSWORD          : ax42i49N23WV
			   MYSQLS_PORT              : 3306
			   MYSQLS_HOSTNAME          : mysqlsdb.co8hm2var4k9.eu-west-1.rds.amazonaws.com
			   MYSQLS_USERNAME          : depkuwtcu49 
			   
			   */
	
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=yiidb',
			'emulatePrepare' => true,
			'username' => 'inagy',
			'password' => 'Drowssa1',
			'charset' => 'utf8',
		),
		
		
   	   /*
			'db'=>array(
	    'connectionString' => 'mysql:host=' . $creds["MYSQLS"]["MYSQLS_HOSTNAME"] . ';dbname=' . $creds["MYSQLS"]["MYSQLS_DATABASE"],
	    'emulatePrepare' => true,
	    'username' => $creds["MYSQLS"]["MYSQLS_USERNAME"],
	    'password' => $creds["MYSQLS"]["MYSQLS_PASSWORD"],
	    'charset' => 'utf8',
			),
		*/	
			
  		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);