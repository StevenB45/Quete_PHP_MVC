<?php

namespace project\model;


class Pdo
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO(DSN, USER, PASSWORD);
    }
}