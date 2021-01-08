<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PersonLehrberufTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PersonLehrberufTable Test Case
 */
class PersonLehrberufTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PersonLehrberufTable
     */
    protected $PersonLehrberuf;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.PersonLehrberuf',
        'app.Person',
        'app.SchoolLehrberuf',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PersonLehrberuf') ? [] : ['className' => PersonLehrberufTable::class];
        $this->PersonLehrberuf = $this->getTableLocator()->get('PersonLehrberuf', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->PersonLehrberuf);

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
