<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SchoolTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SchoolTable Test Case
 */
class SchoolTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SchoolTable
     */
    protected $School;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.School',
        'app.PersonLehrberuf',
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
        $config = $this->getTableLocator()->exists('School') ? [] : ['className' => SchoolTable::class];
        $this->School = $this->getTableLocator()->get('School', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->School);

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
