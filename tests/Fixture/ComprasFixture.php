<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ComprasFixture
 */
class ComprasFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'users_id' => ['type' => 'string', 'length' => 250, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'produto_id' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'nome_id' => ['type' => 'index', 'columns' => ['users_id'], 'length' => []],
            'nome_produto_id' => ['type' => 'index', 'columns' => ['produto_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_compras_produtos' => ['type' => 'foreign', 'columns' => ['produto_id'], 'references' => ['produtos', 'nome_produto'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'FK_compras_users' => ['type' => 'foreign', 'columns' => ['users_id'], 'references' => ['users', 'nome'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'users_id' => 'Lorem ipsum dolor sit amet',
                'produto_id' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
