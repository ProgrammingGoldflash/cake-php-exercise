<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lehrberuf Model
 *
 * @property \App\Model\Table\PersonTable&\Cake\ORM\Association\BelongsToMany $Person
 * @property \App\Model\Table\SchoolTable&\Cake\ORM\Association\BelongsToMany $School
 *
 * @method \App\Model\Entity\Lehrberuf newEmptyEntity()
 * @method \App\Model\Entity\Lehrberuf newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Lehrberuf[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lehrberuf get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lehrberuf findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Lehrberuf patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lehrberuf[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lehrberuf|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lehrberuf saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lehrberuf[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lehrberuf[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lehrberuf[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lehrberuf[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class LehrberufTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('lehrberuf');
        $this->setDisplayField('bezeichnung');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Person', [
            'foreignKey' => 'lehrberuf_id',
            'targetForeignKey' => 'person_id',
            'joinTable' => 'person_lehrberuf',
        ]);
        $this->belongsToMany('School', [
            'foreignKey' => 'lehrberuf_id',
            'targetForeignKey' => 'school_id',
            'joinTable' => 'school_lehrberuf',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('bezeichnung')
            ->maxLength('bezeichnung', 45)
            ->requirePresence('bezeichnung', 'create')
            ->notEmptyString('bezeichnung')
            ->add('bezeichnung', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('kurz')
            ->maxLength('kurz', 5)
            ->requirePresence('kurz', 'create')
            ->notEmptyString('kurz');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['bezeichnung']), ['errorField' => 'bezeichnung']);

        return $rules;
    }
}
