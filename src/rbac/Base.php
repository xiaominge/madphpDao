<?php

namespace MadphpDao\Rbac;
use \Madphp\Db as DB;

/**
* Base Model
*/

class Base
{
    public static $dbname = 'rbac';

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