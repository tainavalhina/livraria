<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComprasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComprasTable Test Case
 */
class ComprasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ComprasTable
     */
    public $Compras;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Compras',
        'app.Users',
        'app.Produtos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Compras') ? [] : ['className' => ComprasTable::class];
        $this->Compras = TableRegistry::getTableLocator()->get('Compras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Compras);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
