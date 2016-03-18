<?php

namespace MadphpDao\Blog;
use \Madphp\Db as DB;

/**
* Base Model
*/

class Base
{
    public static $dbname = 'blog';

	public static $db = null;

    protected static function getDb()
    {
        if (self::$db === null) {
            self::$db = \DB::pdo(self::$dbname);
            self::$db->setFetchStyle(\PDO::FETCH_CLASS);
        }
		return self::$db;
    }

}