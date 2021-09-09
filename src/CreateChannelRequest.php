<?php

declare(strict_types=1);

namespace Notification\NotificationFakeBundle;

use Notification\Common\AbstractCreateChannelRequest;
use Symfony\Component\Validator\Constraints as Assert;

final class CreateChannelRequest extends AbstractCreateChannelRequest
{
    /**
     * @Assert\NotBlank()
     * @Assert\Valid()
     */
    public ChannelConfiguration $configuration;

    public function getConfiguration(): ChannelConfiguration
    {
        return $this->configuration;
    }
}
