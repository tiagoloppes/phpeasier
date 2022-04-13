<?php
class DataSource {
	private static $dataSource = array (
			'DEFAULT' => array (
					'DB_SERVER' => 'localhost',
					'DB_USER' => 'youruser',
					'DB_PASS' => 'yourpassword',
					'DB_NAME' => 'dbname',
					'DB_TYPE' => 'mysql' 
			)
	);
	
	/**
	 *
	 * @param string $dataSourceName        	
	 */
	public static function get($dataSourceName) {
		return self::$dataSource [$dataSourceName];
	}
}
