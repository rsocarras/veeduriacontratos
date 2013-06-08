<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Veeduría Social de Contratos',
	'theme'=>'bootstrap', // requires you to copy the theme under your themes
	// preloading 'log' component
	'language'=>'es',
	'preload'=>array('log','bootstrap'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'auth',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'santos321',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
			'generatorPaths'=>array(
                'bootstrap.gii',
            ),
		),
	
	),

	// application components
	'components'=>array(
		'bootstrap' => array(
	    	'class' => 'ext.bootstrap.components.Bootstrap',
	    	'responsiveCss' => true,
		),


		'user'=>array(
	        'class' => 'auth.components.AuthWebUser',
	        'behaviors' => array(
	            'auth' => array(
	                'class' => 'auth.components.AuthBehavior',
	                'admins' => array('admin'),
	            ),
	        ),
	    ),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'urlSuffix'=>'.html',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=oula',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		
		'authManager'=>array(
            'class'=>'CDbAuthManager',
            'connectionID'=>'db',
            'behaviors' => array(
        		'auth' => array(
          		'class' => 'auth.components.AuthBehavior',
        	),
      ),
        ),
		
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
		'adminEmail'=>'rafael@oula.co',
	),
);