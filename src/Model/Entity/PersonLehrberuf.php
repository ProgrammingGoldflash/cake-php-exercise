<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PersonLehrberuf Entity
 *
 * @property int $person_id
 * @property int $school_id
 * @property int $lehrberuf_id
 * @property \Cake\I18n\FrozenDate $start_date
 * @property \Cake\I18n\FrozenDate $end_date
 *
 * @property \App\Model\Entity\Person $person
 * @property \App\Model\Entity\SchoolLehrberuf $school_lehrberuf
 */
class PersonLehrberuf extends Entity
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
        'start_date' => true,
        'end_date' => true,
        'person' => true,
        'school_lehrberuf' => true,
    ];
}
