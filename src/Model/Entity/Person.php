<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Person Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property int $job_id
 *
 * @property \App\Model\Entity\Job $job
 * @property \App\Model\Entity\Lehrberuf[] $lehrberuf
 */
class Person extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'job_id' => true,
        'job' => true,
        'lehrberuf' => true,
        'school_id' => true,
        'job_id' => true,
    ];
}
