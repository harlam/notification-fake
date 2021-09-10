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

    /**
     * @param FakeMessage|object $message
     */
    public function send(object $message): NotificationResultInterface
    {
        return (new NotificationResult(true))
            ->setDetailedMessage("Fake message sent via account: " . $this->configuration->getUsername());
    }
}
