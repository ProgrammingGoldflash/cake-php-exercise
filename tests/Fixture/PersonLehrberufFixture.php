<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PersonLehrberufFixture
 */
class PersonLehrberufFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'person_lehrberuf';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'person_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'school_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'lehrberuf_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'start_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'end_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_person_has_bs_has_lehrberuf_bs_has_lehrberuf1_idx' => ['type' => 'index', 'columns' => ['school_id', 'lehrberuf_id'], 'length' => []],
            'fk_person_has_bs_has_lehrberuf_person1_idx' => ['type' => 'index', 'columns' => ['person_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['person_id', 'school_id', 'lehrberuf_id'], 'length' => []],
            'fk_person_has_bs_has_lehrberuf_person1' => ['type' => 'foreign', 'columns' => ['person_id'], 'references' => ['person', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'fk_person_has_bs_has_lehrberuf_bs_has_lehrberuf1' => ['type' => 'foreign', 'columns' => ['school_id', 'lehrberuf_id'], 'references' => ['school_lehrberuf', '1' => ['school_id', 'lehrberuf_id']], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'person_id' => 1,
                'school_id' => 1,
                'lehrberuf_id' => 1,
                'start_date' => '2021-01-07',
                'end_date' => '2021-01-07',
            ],
        ];
        parent::init();
    }
}
