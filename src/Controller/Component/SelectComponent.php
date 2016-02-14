<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;

class SelectComponent extends Component
{
    public function index($name) {
    	if($name == "Users"){
	    	$items = TableRegistry::get('Users');
	        $query =  $items->find('all',['fields' => ['id','first_name','last_name']]);
	        return $query->all();
	    }
	    if($name == "Pos"){
	    	$items = TableRegistry::get('Pos');
	        $query =  $items->find('all',['fields' => ['id','po_number']]);
	        return $query->all();
	    }
	    if($name == "Projects"){
	    	$items = TableRegistry::get('Projects');
	        $query =  $items->find('all',['fields' => ['id','name']]);
	        return $query->all();
	    }
	    if($name == "Statuses"){
	    	$items = TableRegistry::get('Statuses');
	        $query =  $items->find('all',['fields' => ['id','name']]);
	        return $query->all();
	    }
    }
}
