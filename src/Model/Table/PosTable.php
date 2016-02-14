<?php
namespace App\Model\Table;

use Cake\ORM\Table;
class PosTable extends Table
{

    public function initialize(array $config)
    {
        $this->hasMany('PoUsers', [
            'className' => 'PoUsers',
            'foreignKey' => 'po_id',
            'bindingKey' => 'id'
        ]);

    }
}

?>