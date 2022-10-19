<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id
 * @property string $nome_produto
 * @property string $descricao
 *
 * @property \App\Model\Entity\Compra[] $compras
 */
class Produto extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome_produto' => true,
        'descricao' => true,
        'compras' => true,
        'categoria_id' => true,
        'categoria' => true
    ];
}
