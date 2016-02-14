<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;

class EffortComponent extends Component
{

    public function add($data) {
    	$efforts = TableRegistry::get('Efforts');
    	$efforts->save($efforts->newEntity($data));
    }

    public function search($data) {
    	$efforts = TableRegistry::get('EffortSearchs');
        $conditions = array();
        if(array_key_exists('user_id',$data)){
            if($data['user_id'] != ""){
                $conditions['user_id']  = $data['user_id'];
            }
        }
        if(array_key_exists('project_id',$data)){
            if($data['project_id'] != ""){
                $conditions['project_id']  = $data['project_id'];
            }
        }
        if(array_key_exists('effort_date',$data)){
            if($data['effort_date'] != ""){
                $conditions['effort_date']  = $data['effort_date'];
            }
        }

        $results =$efforts->find('all',array('conditions'=>$conditions))->all();
        $this->log(print_r($results,true),'debug');
        return $results;

    }
}
