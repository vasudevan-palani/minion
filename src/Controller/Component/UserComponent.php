<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;

class UserComponent extends Component
{
    public function doLogin($email, $password)
    {
        return true;
    }

    public function add($data) {
    	$users = TableRegistry::get('Users');
    	$users->save($users->newEntity($data));
    }

    public function search($data) {
    	$users = TableRegistry::get('Users');
        $conditions = array();
        if(array_key_exists('emp_id',$data)){
            if($data['emp_id'] != ""){
                $conditions['emp_id']  = $data['emp_id'];
            }
        }
        if(array_key_exists('first_name',$data)){
            if($data['first_name'] != ""){
                $conditions['first_name']  = $data['first_name'];
            }
        }
        if(array_key_exists('last_name',$data)){
            if($data['last_name'] != ""){
                $conditions['last_name']  = $data['last_name'];
            }
        }
        if(array_key_exists('email',$data)){
            if($data['email'] != ""){
                $conditions['email']  = $data['email'];
            }
        }

        $results =$users->find('all',array('conditions'=>$conditions))->all();
        $this->log(print_r($results,true),'debug');
        return $results;

    }
}
