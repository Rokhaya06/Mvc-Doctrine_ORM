<?php
namespace src\model;
use libs\system\Model;
class RolesDb
{
    public function add()
    {
        echo 2;
    }
    public function findAll()
    {
        return array("Role_COMPTA","Role_FINACE");
    }
}