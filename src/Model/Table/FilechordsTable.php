<?php
namespace App\Model\Table;

use App\Model\Entity\Filechord;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Filechords Model
 *
 */
class FilechordsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('filechords');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('song', 'create')
            ->notEmpty('song');

        $validator
            ->requirePresence('content', 'create')
            ->notEmpty('content');

        $validator
            ->requirePresence('album', 'create')
            ->notEmpty('album');

        $validator
            ->requirePresence('artist', 'create')
            ->notEmpty('artist');

        $validator
            ->requirePresence('language', 'create')
            ->notEmpty('language');

        return $validator;
    }

    public function isOwnedBy($filechordId, $userId)
    {
        return $this->exists(['id' => $filechordId, 'user_id' => $userId]);
    }
}
