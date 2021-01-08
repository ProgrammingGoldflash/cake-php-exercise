<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SchoolLehrberuf Entity
 *
 * @property int $school_id
 * @property int $lehrberuf_id
 *
 * @property \App\Model\Entity\School $school
 * @property \App\Model\Entity\Lehrberuf $lehrberuf
 */
class SchoolLehrberuf extends Entity
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
        'school' => true,
        'lehrberuf' => true,
    ];
}
