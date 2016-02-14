<?php
namespace App\Model\Table;

use Cake\ORM\Table;
class InvoicesTable extends Table
{

    public function initialize(array $config)
    {
        $this->hasMany('InvoiceUsers', [
            'className' => 'InvoiceUsers',
            'foreignKey' => 'invoice_id',
            'bindingKey' => 'id'
        ]);

    }
}

?>