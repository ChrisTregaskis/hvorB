<?php

namespace WBApp\ViewHelpers;

use \WBApp\Entities\UserEntity;

class UsersViewHelper
{
    /** Concatenates new users table ready to be output
     *
     * @param $users, takes array of users that is an instance of UserEntity
     * @return string, long string that is table of users
     */
    public static function displayUsers($users)
    {
        $result = '';
        foreach ($users as $user) {
            if ($user instanceof UserEntity) {

                if ($user->getUserMatchCurrent() == 1) {
                    $trClass = 'class="table-row table-warning"';
                } else {
                    $trClass = 'class="table-row"';
                }

                $result .= '<tr ' . $trClass . ' data-id="'. $user->getUserId().'">';
                $result .=      '<td>'. $user->getUserFullName().'</td>';
                $result .=      '<td>'. $user->getUserKnownCompany().'</td>';
                $result .=      '<td>'. $user->getUserKnownEmail().'</td>';
                $result .=      '<td class="apiMatch">'. $user->getUserMatchCurrent().'</td>';
                $result .= '</tr>';
            }
        }
        return $result;
    }

}