<?php
/**
 * ===================================================
 * 
 * PHP FW "Reald"
 * config/app.php
 * 
 * Specify the initial settings that are the basis of this web system here.
 * 
 * URL : 
 * Copylight : Masato-Nakatsuji 2023.
 * 
 * ===================================================
 */

namespace Reald\Core;

return [

	/**
	 * [appName]
	 * Specify the development application name here.
	 */
	'appName'=>'Mk2 SYS',

	/**
	 * [debugMode]
	 * If this is set to true, debug trace results etc. 
	 * will be displayed by default when an error occurs.
	 */
	'debugMode' => true,

	/**
	 * [autoRouting]
	 * If this is set to true, the assigned Controller and action will be automatically 
	 * determined by the URL even if there is no routing setting.
	 */
	'autoRouting' => false,

	/**
	 * [defaultRouting]
	 * If ʻautoRouting` is true, be sure to specify the default Controller and action.
	 */
	'defaultRouting'=>[
		'controller' => 'main',
		'action' => 'index',
	],

	/**
	 *  [fullPath]
	 *  If this is set to true, route information etc. 
	 *  will be displayed with the full path including the domain name.
	 */
	'fullPath' => false,

	/**
	 *  [coreblock]
	 *  In the CoreBlock class that is the core of each class, 
	 *  it is possible to enable/disable the subclass to be used.
	 */
	'coreBlock'=>[
		'useLoading' => true,
		'useRequest' => true,
		'useResponse' => true,
	],

	/**
	 * [useClass]
	 * Be sure to list each class to be used here.
	 */
	'useClass' => ['Controller', 'Pack', 'Model', 'Render', 'Shell', 'Middleware'],

	/**
	 * 
	 *  [routing]
	 *  Specify the root search settings for various URLs of web pages or console execution paths here.
	 *  Direct routing can be specified, but if the amount is large, read from an external file as follows.
	 * 
	 * example)
	 * 	 "pages" => Config::require("route-page.php"),
	 *  
	 */
	
	'routing' => [
		// web page (endpoint)
		'pages' => Config::require("route_wab.php"),
		// console (CLI)
		'shell' => Config::require("route_shell.php"),
	],
	

	/**
	 *  [database]
	 *  Specifies the database connection destination to use.
	 *  It is OK to specify the connection destination directly, 
	 *  but read from an external file as follows
	 * 
	 * example)
	 *'  database'=>Config::require("database.php"),
	 *  
	 */
	'database' => Config::require("database.php"),

	/**
	 *  [middleware]
	 *  Specify the middleware to be executed in the middle of routing and processing transition to Controller as follows.
	 *  It is OK to specify directly, but read from an external file as follows.
	 * 
	 *  example) 
	 *   'pages' => Config::require("middleware/pages.php"),
	 */
	'middleware'=>[
		'pages' => Config::require("middleware/pages.php"),
		'shell' => Config::require('middleware/shell.php'),
	],

	/**
	 * [require]
	 * List the configuration files that have been converted to external files here.
	 */
	'require'=>[
	],
	
];