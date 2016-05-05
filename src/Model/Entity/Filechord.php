<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Filechord Entity.
 *
 * @property int $id
 * @property string $song
 * @property string $content
 * @property string $album
 * @property string $artist
 * @property string $language
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Filechord extends Entity
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
        '*' => true,
        'id' => false,
    ];
}
