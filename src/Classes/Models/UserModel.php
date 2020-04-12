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
}