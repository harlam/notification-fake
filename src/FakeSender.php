<?php

declare(strict_types=1);

namespace Notification\Fake;

use Notification\Common\NotificationResult;
use Notification\Common\NotificationResultInterface;
use Notification\Common\SenderInterface;

class FakeSender implements SenderInterface
{
    private FakeSenderConfiguration $configuration;

    public function __construct(FakeSenderConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function send(): NotificationResultInterface
    {
        return (new NotificationResult(true))
            ->setDetailedMessage("Fake message sent via account: " . $this->getConfiguration()->getUsername());
    }

    public function getConfiguration(): FakeSenderConfiguration
    {
        return $this->configuration;
    }
}
