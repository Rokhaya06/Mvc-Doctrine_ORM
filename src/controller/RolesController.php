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
        $roles_dao = new RolesDb();
        $roles = $roles_dao->findAll();
        return $this->view->load("roles/getAll",$roles);

       /* var_dump($roles);
        foreach ($roles as $role){
            echo $role."</br>";*/
        }
        public function delete()
        {
            echo $id;
            //return $this->view->load("roles/add");
        }
    
        
    }

