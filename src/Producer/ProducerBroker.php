<?php
declare(strict_types=1);

namespace Kafka\Producer;

use Kafka\Broker;
use Kafka\SingletonTrait;

class ProducerBroker extends Broker
{
    use SingletonTrait;
}