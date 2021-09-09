<?php

declare(strict_types=1);

namespace Notification\Fake;

use Notification\Common\NotificationResult;
use Notification\Common\NotificationResultInterface;
use Notification\Common\SenderInterface;

class FakeSender implements SenderInterface
{
    private FakeChannelConfiguration $configuration;

    public function __construct(FakeChannelConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function send(): NotificationResultInterface
    {
        return (new NotificationResult(true))
            ->setDetailedMessage("Sent via account: " . $this->getConfiguration()->getUsername());
    }

    public function getConfiguration(): FakeChannelConfiguration
    {
        return $this->configuration;
    }
}
