<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SchoolLehrberufFixture
 */
class SchoolLehrberufFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'school_lehrberuf';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'school_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'lehrberuf_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_bs_has_lehrberuf_lehrberuf1_idx' => ['type' => 'index', 'columns' => ['lehrberuf_id'], 'length' => []],
            'fk_bs_has_lehrberuf_bs_idx' => ['type' => 'index', 'columns' => ['school_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['school_id', 'lehrberuf_id'], 'length' => []],
            'fk_bs_has_lehrberuf_lehrberuf1' => ['type' => 'foreign', 'columns' => ['lehrberuf_id'], 'references' => ['lehrberuf', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'fk_bs_has_lehrberuf_bs' => ['type' => 'foreign', 'columns' => ['school_id'], 'references' => ['school', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'school_id' => 1,
                'lehrberuf_id' => 1,
            ],
        ];
        parent::init();
    }
}
