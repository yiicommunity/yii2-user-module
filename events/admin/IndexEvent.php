<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, communityii, 2014 - 2015
 * @package communityii/yii2-user
 * @version 1.0.0
 *
 * @author derekisbusy https://github.com/derekisbusy
 * @author kartik-v https://github.com/kartik-v
 */

namespace comyii\user\events\admin;

use comyii\user\events\Event;
use comyii\user\events\SearchEventTrait;
use comyii\user\events\ViewEventTrait;

class IndexEvent extends Event
{
    use SearchEventTrait;
    use ViewEventTrait;
}
