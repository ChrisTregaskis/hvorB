<?php

namespace Test\Factories;

use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use WBApp\Factories\UserModelFactory;
use WBApp\Models\UserModel;

class UserModelFactoryTest extends TestCase
{
    public function testInvoke()
    {
        $container = $this->createMock(ContainerInterface::class);
        $db = $this->createMock(\PDO::class);
        $container->method('get')->willReturn($db);
        $factory = new UserModelFactory();
        $case = $factory($container);
        $expected = UserModel::class;
        $this->assertInstanceOf($expected, $case);
    }
}