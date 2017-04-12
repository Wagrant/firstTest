<?php
class dbModel
{
	function connect()
	{
		$dsn = "mysql:host=" . DB_HOST . "; dbname=" . DB_NAME;
		try 
		{
		    $this->dbh = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
		} 
		catch (PDOException $e) 
		{
		    die('Connect to DB failed');
		}
	}
}