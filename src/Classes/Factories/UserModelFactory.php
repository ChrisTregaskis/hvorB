<?php

namespace  WBApp\Factories;

use WBApp\Models\UserModel;
use Psr\Container\ContainerInterface;

class UserModelFactory
{
    /** Creates UserModel with db dependency
     *
     * @param ContainerInterface $container container for access to dbConnection
     * @return UserModel returns object with db connection injected
     */
    public function __invoke(ContainerInterface $container)
    {
        $db = $container->get('dbConnection');
        return new UserModel($db);
    }
}