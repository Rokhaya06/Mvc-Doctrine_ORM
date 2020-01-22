<?php

namespace src\controller;
use src\model\RolesDb;
use libs\system\Controller;
class RolesController extends Controller
{
    public function add()
    {
        return $this->view->load("roles/add");
    }

    public function getAll(){
        $rolesdb = new RolesDb();
        $roles = $rolesdb->findAll();

        var_dump($roles);
        foreach ($roles as $role){
            echo $role."</br>";
        }
        //return $this->view->load("roles/getAll",$roles);
    }
}
