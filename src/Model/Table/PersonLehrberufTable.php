<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PersonLehrberuf Model
 *
 * @property \App\Model\Table\PersonTable&\Cake\ORM\Association\BelongsTo $Person
 * @property \App\Model\Table\SchoolLehrberufTable&\Cake\ORM\Association\BelongsTo $SchoolLehrberuf
 * @property \App\Model\Table\SchoolLehrberufTable&\Cake\ORM\Association\BelongsTo $SchoolLehrberuf
 *
 * @method \App\Model\Entity\PersonLehrberuf newEmptyEntity()
 * @method \App\Model\Entity\PersonLehrberuf newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\PersonLehrberuf[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PersonLehrberuf get($primaryKey, $options = [])
 * @method \App\Model\Entity\PersonLehrberuf findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\PersonLehrberuf patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PersonLehrberuf[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PersonLehrberuf|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PersonLehrberuf saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PersonLehrberuf[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PersonLehrberuf[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\PersonLehrberuf[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PersonLehrberuf[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PersonLehrberufTable extends Table
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

        $this->setTable('person_lehrberuf');
        $this->setDisplayField('person_id');
        $this->setPrimaryKey(['person_id', 'school_id', 'lehrberuf_id']);

        $this->belongsTo('Person', [
            'foreignKey' => 'person_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('SchoolLehrberuf', [
            'foreignKey' => 'school_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('SchoolLehrberuf', [
            'foreignKey' => 'lehrberuf_id',
            'joinType' => 'INNER',
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
            ->date('start_date')
            ->requirePresence('start_date', 'create')
            ->notEmptyDate('start_date');

        $validator
            ->date('end_date')
            ->requirePresence('end_date', 'create')
            ->notEmptyDate('end_date');

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
        $rules->add($rules->existsIn(['person_id'], 'Person'), ['errorField' => 'person_id']);
        $rules->add($rules->existsIn(['school_id'], 'SchoolLehrberuf'), ['errorField' => 'school_id']);
        $rules->add($rules->existsIn(['lehrberuf_id'], 'SchoolLehrberuf'), ['errorField' => 'lehrberuf_id']);

        return $rules;
    }
}
