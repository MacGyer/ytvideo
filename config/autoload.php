<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Ytvideo
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Ytvideo'        => 'system/modules/ytvideo/classes/Ytvideo.php',

	// Modules
	'ContentYtvideo' => 'system/modules/ytvideo/modules/ContentYtvideo.php',
	'ModuleYtvideo'  => 'system/modules/ytvideo/modules/ModuleYtvideo.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_ytvideo'  => 'system/modules/ytvideo/templates/elements',
	'mod_ytvideo' => 'system/modules/ytvideo/templates/modules',
));
