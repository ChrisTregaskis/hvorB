<?php

namespace WBApp\Factories;

use Psr\Container\ContainerInterface;
use WBApp\Controllers\DisplayUsersController;

class DisplayUsersControllerFactory
{
    /** Instantiates DisplayUsersController with dependencies
     *
     * @param ContainerInterface $container
     * @return DisplayUsersController.
     */
    public function __invoke(ContainerInterface $container) : DisplayUsersController
    {
        $renderer = $container->get('renderer');
        $userModel = $container->get('UserModel');
        return new DisplayUsersController($renderer, $userModel);
    }
}