<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lehrberuf Entity
 *
 * @property int $id
 * @property string $bezeichnung
 * @property string $kurz
 *
 * @property \App\Model\Entity\Person[] $person
 * @property \App\Model\Entity\School[] $school
 */
class Lehrberuf extends Entity
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
        'bezeichnung' => true,
        'kurz' => true,
        'person' => true,
        'school' => true,
    ];
}
