<?php

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Controller\Component\Auth;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $foto
 * @property int $role_id
 * @property string $nome
 * @property string $email
 * @property string $senha
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Role $role
 */
class User extends Entity
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
        'foto' => true,
        'role_id' => true,
        'nome' => true,
        'email' => true,
        'senha' => true,
        'created' => true,
        'modified' => true,
        'role' => true
    ];

    public function _setSenha($senha)
    {

        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($senha);
    }
}
