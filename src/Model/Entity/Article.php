<?php
/**
 * Created by IntelliJ IDEA.
 * User: bufferings
 * Date: 18/09/23
 * Time: 0:16
 */

namespace App\Model\Entity;


use Cake\ORM\Entity;

class Article extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slug' => false,
    ];
}
