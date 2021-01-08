<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SchoolLehrberufTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SchoolLehrberufTable Test Case
 */
class SchoolLehrberufTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SchoolLehrberufTable
     */
    protected $SchoolLehrberuf;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.SchoolLehrberuf',
        'app.School',
        'app.Lehrberuf',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SchoolLehrberuf') ? [] : ['className' => SchoolLehrberufTable::class];
        $this->SchoolLehrberuf = $this->getTableLocator()->get('SchoolLehrberuf', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->SchoolLehrberuf);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
