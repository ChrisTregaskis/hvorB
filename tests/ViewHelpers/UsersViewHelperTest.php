<?php

namespace Tests\ViewHelpers;

use PHPUnit\Framework\TestCase;
use WBApp\ViewHelpers\UsersViewHelper;
use WBApp\Entities\UserEntity;

class UsersViewHelperTest extends TestCase
{
    /**
     * Makes sure UserViewHelper method successfully handles obj and creates a string with correct
     *  id, fullName, knownCompany, knownEmail and matchCurrent data.
     */
    public function testSuccessOfDisplayUsers()
    {
        $expected = '';
        $expected .= '<tr class="table-row" data-id="1">';
        $expected .= '<td>Test Full Name</td>';
        $expected .= '<td>Test Company</td>';
        $expected .= '<td>Test Email</td>';
        $expected .= '<td class="apiMatch">0</td>';
        $expected .= '</tr>';
        $entityMock = $this->createMock(UserEntity::class);
        $entityMock->method('getUserId')->willReturn('1');
        $entityMock->method('getUserFullName')->willReturn('Test Full Name');
        $entityMock->method('getUserKnownCompany')->willReturn('Test Company');
        $entityMock->method('getUserKnownEmail')->willReturn('Test Email');
        $entityMock->method('getUserMatchCurrent')->willReturn('0');

        $input = [$entityMock];
        $case = UsersViewHelper::displayUsers($input);

        $this->assertEquals($expected, $case);
    }
}
