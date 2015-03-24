<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Beer Entity.
 */
class Beer extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'image' => true,
        'qte' => true,
        'type_id' => true,
        'format_id' => true,
        'type' => true,
        'format' => true,
    ];
}
