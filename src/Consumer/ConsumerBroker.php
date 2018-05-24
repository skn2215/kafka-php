<?php
declare(strict_types=1);

namespace Kafka\Consumer;

use Kafka\Broker;
use Kafka\SingletonTrait;

class ConsumerBroker extends Broker
{
    use SingletonTrait;
}