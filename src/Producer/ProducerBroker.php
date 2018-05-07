<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07.05.18
 * Time: 17:56
 */

namespace Kafka\Producer;

use Kafka\Broker;
use Kafka\SingletonTrait;

class ProducerBroker extends Broker
{
    use SingletonTrait;
}