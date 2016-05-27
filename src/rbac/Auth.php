<?php

namespace MadphpDao\Rbac;

/**
 * Auth Model
 */

class Auth extends Base
{
    const tableName = 'rbac_auth';

    public static $defaultSqlMap = array('table' => 'rbac_auth');

    public function getAll()
    {
        return $this->getDb()->fetchAll(Sql\Auth::getList, self::$defaultSqlMap);
    }
}