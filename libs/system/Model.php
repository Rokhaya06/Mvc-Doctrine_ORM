<?php

namespace libs\system;

class Model
{
    protected $entityManager;
    public function __construct()
    {
        require_once "bootstrap.php";

        $entityManager =$entityManager;
        $this->entityManager = $entityManager;
    }



}