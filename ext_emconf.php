<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "mc_googlesitemap".
 *
 * Auto generated 03-10-2013 17:43
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Google Sitemap for Pages and Contents',
	'description' => 'XML Generator for Google\'s sitemaps , can be used for pages or contents. All sitemaps options available.',
	'category' => 'fe',
	'shy' => 0,
	'version' => '0.5.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'tt_content,pages',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Maximo Cuadros [Gobernalia Global Net S.A - GrupoBBVA]',
	'author_email' => 'maximo.cuadros@grupobbva.com',
	'author_company' => 'Gobernalia Global Net S.A (GrupoBBVA)',
	'CGLcompliance' => NULL,
	'CGLcompliance_note' => NULL,
	'constraints' => 
	array (
		'depends' => array (
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.5.0-0.0.0',
		),
		'conflicts' => array (),
		'suggests' => array (),
	),
);

?>