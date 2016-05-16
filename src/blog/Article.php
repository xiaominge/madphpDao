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
        $r = self::getDb()->setIsWrite()->fetchAll(Sql\Article::getList, self::$defaultSqlMap);
        return $r;
    }

}