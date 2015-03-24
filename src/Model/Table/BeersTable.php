<?php
namespace App\Model\Table;

use App\Model\Entity\Beer;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Beers Model
 */
class BeersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('beers');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Types', [
            'foreignKey' => 'type_id'
        ]);
        $this->belongsTo('Formats', [
            'foreignKey' => 'format_id'
        ]);
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
            ->allowEmpty('id', 'create')
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->requirePresence('image', 'create')
            ->notEmpty('image')
            ->add('qte', 'valid', ['rule' => 'numeric'])
            ->requirePresence('qte', 'create')
            ->notEmpty('qte')
            ->add('type_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('type_id', 'create')
            ->notEmpty('type_id')
            ->add('format_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('format_id', 'create')
            ->notEmpty('format_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['type_id'], 'Types'));
        $rules->add($rules->existsIn(['format_id'], 'Formats'));
        return $rules;
    }
}
