<?PHP
/******************************************
 * Русификация языковых файлов SuiteCRM.
 * Последние обновления доступны по адресу:
 * https://github.com/likhobory/SuiteCRM7RU
 * @author likhobory <likhobory@mail.ru>
 ******************************************/
$manifest = array( 
	'name' => 'RUSSIAN RAPIRA LANGUAGE PACK FOR SUITECRM',
	'description' => 'очередной перевод на великий и могучий',
	'type' => 'langpack',
	'is_uninstallable' => 'Yes',
	'acceptable_sugar_versions' =>
		  array(),
	'acceptable_sugar_flavors' =>
		  array('CE'),
	'author' => 'likhobory',
    'version' => '7.11.15',
	'published_date' => '2020/06/23',
      );

$installdefs = array(
	'id' => 'ru_ru',
	'copy' => array(
	array('from' => '<basepath>/include','to' => 'include',),
	array('from' => '<basepath>/modules','to' => 'modules'),
	array('from' => '<basepath>/install','to' => 'install'),

                    )
 );
