<?php

$manifest = array(
    // only install on the following sugar versions (if empty, no check)
    array (
      'exact_matches' =>
        array (
        ),
      'regex_matches' =>
        array (
          0 => '6\.5\.0?'
        ),
    ),
    // Version for which this langpack can work
    'acceptable_sugar_flavors' =>
      array (
        0 => 'CE',
        1 => 'PRO',
        2 => 'ENT',
      ),

    // name of the Pack
    'name' => 'SugarCRM简体中文语言包（Simplified Chinese Language Pack）',

    // description of new code
    'description' => 'SugarCRM简体中文语言包（Simplified Chinese Language Pack）6.5.2',

    // author of new code
    'author' => 'hileon@gmail.com',

    // date published
    'published_date' => '2012/07/31',

    // version of code
    'version' => '6.5.2',

    // type of code (valid choices are: full, langpack, module, patch, theme )
    'type' => 'langpack',

    // icon for displaying in UI (path to graphic contained within zip package)
    'icon' => '',

    // Uninstall is allowed
    'is_uninstallable' => TRUE,
);

$installdefs = array(
	'id' => 'zh_cn',
	'copy' => array(
				array(
					'from' => '<basepath>/modules',
					'to'   => 'modules',
					),
				array(
					'from' => '<basepath>/include/language'),
					'to'   => 'include/language'
					),
				array(
					'from' => '<basepath>/install/language',
					'to'   => 'install/language',
					),
);
?>
 
