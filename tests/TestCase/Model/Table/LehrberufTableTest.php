<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LehrberufTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LehrberufTable Test Case
 */
class LehrberufTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LehrberufTable
     */
    protected $Lehrberuf;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Lehrberuf',
        'app.Person',
        'app.School',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Lehrberuf') ? [] : ['className' => LehrberufTable::class];
        $this->Lehrberuf = $this->getTableLocator()->get('Lehrberuf', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Lehrberuf);

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
