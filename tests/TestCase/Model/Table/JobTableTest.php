<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JobTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JobTable Test Case
 */
class JobTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JobTable
     */
    protected $Job;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Job',
        'app.Person',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Job') ? [] : ['className' => JobTable::class];
        $this->Job = $this->getTableLocator()->get('Job', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Job);

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
}
