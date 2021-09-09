<?php

declare(strict_types=1);

namespace Notification\NotificationFakeBundle;

use Notification\Common\NotificationResult;
use Notification\Common\NotificationResultInterface;
use Notification\Common\SenderInterface;

class Sender implements SenderInterface
{
    private ChannelConfiguration $configuration;

    public function __construct(ChannelConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function send(): NotificationResultInterface
    {
        return (new NotificationResult(true))
            ->setDetailedMessage("Sent via account: " . $this->getConfiguration()->getUsername());
    }

    public function getConfiguration(): ChannelConfiguration
    {
        return $this->configuration;
    }
}
