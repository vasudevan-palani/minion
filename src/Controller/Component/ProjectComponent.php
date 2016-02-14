<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;

class ProjectComponent extends Component
{
    public function search($name,$id,&$controller)
    {
    	$projects = TableRegistry::get('Projects');
        return $projects->find();
    }
}
