<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SpendingTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SpendingTable Test Case
 */
class SpendingTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SpendingTable
     */
    public $Spending;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Spending'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Spending') ? [] : ['className' => SpendingTable::class];
        $this->Spending = TableRegistry::getTableLocator()->get('Spending', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Spending);

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
