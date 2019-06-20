<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IncomeReasonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IncomeReasonsTable Test Case
 */
class IncomeReasonsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IncomeReasonsTable
     */
    public $IncomeReasons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.IncomeReasons'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('IncomeReasons') ? [] : ['className' => IncomeReasonsTable::class];
        $this->IncomeReasons = TableRegistry::getTableLocator()->get('IncomeReasons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->IncomeReasons);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
