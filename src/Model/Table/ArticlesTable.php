// src/Model/Table/ArticlesTable.php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ArticlesTable extends Table {
    public function initialize(array $config) {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator) {
        $validator
            ->notEmpty('title')
            ->notEmpty('body');

        return $validator;
    }
}
