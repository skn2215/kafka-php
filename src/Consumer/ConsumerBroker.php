<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07.05.18
 * Time: 17:55
 */

namespace Kafka\Consumer;

use Kafka\Broker;
use Kafka\SingletonTrait;

class ConsumerBroker extends Broker
{
    use SingletonTrait;
}