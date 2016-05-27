<?php

namespace MadphpDao\Rbac;

use MadphpDao\Common;

/**
 * Base Model
 */
class Base extends Common
{
    const dbName = 'rbac';

    public $fetchType = \PDO::FETCH_ASSOC;

    public $debug = true;
}