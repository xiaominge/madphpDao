<?php

namespace MadphpDao\Blog;

/**
 * Article Model
 */

class Article extends Base
{
    const tableName = 'l_articles';

    public static $defaultSqlMap = array('table' => 'l_articles');

    public function getAll()
    {
        $r = $this->getDb()->setIsWrite()->fetchAll(Sql\Article::getList, self::$defaultSqlMap);
        return $r;
    }

}