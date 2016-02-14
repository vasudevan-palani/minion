<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;

use Cake\DataSource\ConnectionManager;

class InvoicesComponent extends Component
{
    public function add($data){

    	$invoices = TableRegistry::get('Invoices');
        $invoice = $invoices->newEntity($data);
        $invoice->start_date = $data['start_date'];
        $invoice->end_date = $data['end_date'];
        $invoices->save($invoice);
    }

    public function getTotalInvoicesByPo($data){

        $connection = ConnectionManager::get('default');
        $results = $connection->execute('select sum(invoice_users.total) total from invoices,invoice_users where invoices.id=invoice_users.invoice_id and invoices.po_id='.$data['po_id'])->fetchAll();
        $this->log(print_r($results,true),'debug');
        return array('sum'=>$results[0][0]);
    }

    public function search($data){

        $invoices = TableRegistry::get('InvoiceSearchs');

        $conditions = array();
        if(array_key_exists('invoice_id',$data)){
            if($data['invoice_id'] != ""){
                $conditions['invoice_id']  = $data['invoice_id'];
            }
        }
        if(array_key_exists('po_id',$data)){
            if($data['po_id'] != ""){
                $conditions['po_id']  = $data['po_id'];
            }
        }
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
        if(array_key_exists('start_date',$data)){
            if($data['start_date'] != ""){
                $conditions['start_date']  = $data['start_date'];
            }
        }
        if(array_key_exists('end_date',$data)){
            if($data['end_date'] != ""){
                $conditions['end_date']  = $data['end_date'];
            }
        }
        if(array_key_exists('status_id',$data)){
            if($data['status_id'] != ""){
                $conditions['status_id']  = $data['status_id'];
            }
        }

        $results =$invoices->find('all',array('conditions'=>$conditions))->all();
        $this->log(print_r($results,true),'debug');
        return $results;

    }

}
