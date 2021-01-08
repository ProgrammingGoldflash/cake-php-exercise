<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SchoolLehrberuf Model
 *
 * @property \App\Model\Table\SchoolTable&\Cake\ORM\Association\BelongsTo $School
 * @property \App\Model\Table\LehrberufTable&\Cake\ORM\Association\BelongsTo $Lehrberuf
 *
 * @method \App\Model\Entity\SchoolLehrberuf newEmptyEntity()
 * @method \App\Model\Entity\SchoolLehrberuf newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\SchoolLehrberuf[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SchoolLehrberuf get($primaryKey, $options = [])
 * @method \App\Model\Entity\SchoolLehrberuf findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\SchoolLehrberuf patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SchoolLehrberuf[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SchoolLehrberuf|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SchoolLehrberuf saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SchoolLehrberuf[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SchoolLehrberuf[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\SchoolLehrberuf[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SchoolLehrberuf[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SchoolLehrberufTable extends Table
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

        $this->setTable('school_lehrberuf');
        $this->setDisplayField('school_id');
        $this->setPrimaryKey(['school_id', 'lehrberuf_id']);

        $this->belongsTo('School', [
            'foreignKey' => 'school_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Lehrberuf', [
            'foreignKey' => 'lehrberuf_id',
            'joinType' => 'INNER',
        ]);
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
        $rules->add($rules->existsIn(['school_id'], 'School'), ['errorField' => 'school_id']);
        $rules->add($rules->existsIn(['lehrberuf_id'], 'Lehrberuf'), ['errorField' => 'lehrberuf_id']);

        return $rules;
    }
}
