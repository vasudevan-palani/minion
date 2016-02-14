<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;

class PurchaseOrdersComponent extends Component
{
    public function add($data){

    	$pos = TableRegistry::get('Pos');
    	$poUsers = TableRegistry::get('PoUsers');
        $po = $pos->newEntity();
        $po->po_number = $data['po_number'];
        $po->requester = $data['requester'];
        $po->buyer = $data['buyer'];
        $po->total = $data['total'];

        if($pos->save($po)){
        	foreach ($data['users'] as $key => $user) {
        		$poUser = $poUsers->newEntity();
        		$poUser->po_id = $po->id;
        		$poUser->user_id = $user['user_id'];
        		$poUser->billing_rate = $user['billing_rate'];
        		$poUser->hours = $user['hours'];
                $poUser->total = $user['total'];
        		$poUsers->save($poUser);
        	}
        }
    }

    public function search($data){

        $pos = TableRegistry::get('Pos');
        $data = $pos->find('all',['conditions'=>['Pos.po_number'=>$data['po_number']]])->contain(['PoUsers']);
        $this->log(print_r($data,true),'debug');
        return $data;
    }

    public function update($data){
        $pos = TableRegistry::get('Pos');
        $po = $pos->newEntity($data);
        $pos->save($po);
    }


    public function findById($id){
        $pos = TableRegistry::get('Pos');
        return $pos->find('all',['conditions'=>['Pos.id'=>$id]])->contain(['PoUsers']);
    }
}
