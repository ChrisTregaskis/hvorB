<?php

namespace Tests\Controllers;

use WBApp\Controllers\DisplayUsersController;
use PHPUnit\Framework\TestCase;
use WBApp\Models\UserModel;
use Slim\Views\PhpRenderer;

class DisplayUsersControllerTest extends TestCase
{
    /**
     *  Checks if construct successfully instantiates new DisplayUsersController
     *  obj with renderer and model
     */
    public function testConstruct()
    {
        $renderer = $this->createMock(PhpRenderer::class);
        $model = $this->createMock(UserModel::class);
        $case = new DisplayUsersController($renderer, $model);
        $expected = DisplayUsersController::class;
        $this->assertInstanceOf($expected, $case);
    }
}