<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Users Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'email' => true,
    ];
}
