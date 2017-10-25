<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: teteu
 * Date: 14/10/2017
 * Time: 16:12
 */

namespace SONFin\Repository;


class RepositoryFactory
{
    public static function factory(string $modelClass)
    {
        return new DefaultRepository($modelClass);
    }
}
