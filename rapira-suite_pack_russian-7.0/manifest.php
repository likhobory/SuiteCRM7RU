<?PHP
$manifest = array( 
	'name' => 'RUSSIAN RAPIRA LANGUAGE PACK',
	'description' => 'очередной перевод на великий и могучий',
	'type' => 'langpack',
	'is_uninstallable' => 'Yes',
	'acceptable_sugar_versions' =>
		  array (),
	'acceptable_sugar_flavors' =>
		  array('CE'),
	'author' => 'likhobory',
    'version' => '7.0.1',
	'published_date' => '2013/11/25',
      );

$installdefs = array(
	'id'=> 'ru_ru',
	'image_dir'=>'<basepath>/images',
	'copy' => array(
	array('from'=> '<basepath>/include','to'=>'include',),
	array('from'=> '<basepath>/modules','to'=>'modules'),
	array('from'=> '<basepath>/install','to'=>'install'),
	array('from'=> '<basepath>/custom','to'=>'custom'),

                        )
 );
?>