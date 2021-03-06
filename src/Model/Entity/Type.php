<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Type Entity.
 */
class Type extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'beers' => true,
    ];
}
