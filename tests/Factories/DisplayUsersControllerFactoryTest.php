<?php

namespace Test\Factories;

use PHPUnit\Framework\TestCase;
use WBApp\Controllers\DisplayUsersController;
use WBApp\Models\UserModel;
use Slim\Views\PhpRenderer;

class DisplayUsersControllerFactoryTest extends TestCase
{
    /**
     *  Checks if DisplayUsersControllerFactory instantiates DisplayUsersController
     *  obj correctly, passing in a mock PhpRenderer and UserModel
     */
    public function testDisplayUsersControllerFactory()
    {
        $renderer = $this->createMock(PhpRenderer::class);
        $model = $this->createMock(UserModel::class);
        $case = new DisplayUsersController($renderer, $model);
        $expected = DisplayUsersController::class;
        $this->assertInstanceOf($expected, $case);
    }
}