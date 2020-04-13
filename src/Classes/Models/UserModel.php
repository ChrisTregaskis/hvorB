<?php

namespace WBApp\Models;

class UserModel
{
    private $db;

    /** Constructor assigns db PDO to this object
     *
     * @param \PDO $db taken from UserModelFactory
     */
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    /** Gets all the users from DB and sorted alphabetically by company
     *
     * @return array
     */
    public function getAllUsers()
    {
        $query = $this->db->prepare('SELECT `id`, `fname`, `sname`, `fullName`, `knownCompany`, `KnownEmail`, `companyAPIResult`, `matchPrevious`, `matchCurrent` FROM `users_test` ORDER BY `knownCompany`;');
        $query->setFetchMode(\PDO::FETCH_CLASS, 'WBApp\Entities\UserEntity');
        $query->execute();
        return $query->fetchAll();
    }
}