<?php

namespace MadphpDao\Blog;

/**
* Article Model
*/

class Article extends Base
{
    const table = 'l_articles';
    
    public static $defaultSqlMap = array('table' => self::table);

    public static function getAll()
    {
    	return self::getDb()->fetchAll(Sql\Article::getList, self::$defaultSqlMap);
    }
}