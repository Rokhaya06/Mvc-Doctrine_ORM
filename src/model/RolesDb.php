<?php
namespace src\model;
use libs\system\Model;

class RolesDb extends Model
{
    public function add()
    {
        echo 2;
    }
    public function findAll()
    {
        return $this->entityManager
        ->createQuery("select r from Roles r")
        ->getResult();
        //return array("Role_COMPTA","Role_FINANCE");
    }
}