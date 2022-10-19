<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FinalizacomprasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FinalizacomprasTable Test Case
 */
class FinalizacomprasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FinalizacomprasTable
     */
    public $Finalizacompras;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Finalizacompras',
        'app.Compras'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Finalizacompras') ? [] : ['className' => FinalizacomprasTable::class];
        $this->Finalizacompras = TableRegistry::getTableLocator()->get('Finalizacompras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Finalizacompras);

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
