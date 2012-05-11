<?php defined('SYSPATH') or die('No direct script access.');

class Campaign_Install {
	public function __construct() {
		Kohana::log('debug', 'create database object');
		$this -> db = new Database();
	}

	public function run_install() {
		Kohana::log('debug', 'install campaing plugin');
		$sql = '
CREATE TABLE IF NOT EXISTS ' . Kohana::config('database.default.table_prefix') . 'campaign (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`description` text COLLATE utf8_unicode_ci NOT NULL,
`latitude` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
`longitude` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
`radius` tinyint(4) NOT NULL,
`categories` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
';

		$this -> db -> query($sql);
		Kohana::log('debug','campaing plugin installed successfully');

	}

	public function run_uninstall() {
		Kohana::log('debug', 'uninstall');
	}

}
