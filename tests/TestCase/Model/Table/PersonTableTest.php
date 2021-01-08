<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PersonTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PersonTable Test Case
 */
class PersonTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PersonTable
     */
    protected $Person;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Person',
        'app.Job',
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
        $config = $this->getTableLocator()->exists('Person') ? [] : ['className' => PersonTable::class];
        $this->Person = $this->getTableLocator()->get('Person', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Person);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
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
