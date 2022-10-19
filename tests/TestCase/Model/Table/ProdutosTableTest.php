<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProdutosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProdutosTable Test Case
 */
class ProdutosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProdutosTable
     */
    public $Produtos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Produtos',
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
        $config = TableRegistry::getTableLocator()->exists('Produtos') ? [] : ['className' => ProdutosTable::class];
        $this->Produtos = TableRegistry::getTableLocator()->get('Produtos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Produtos);

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
