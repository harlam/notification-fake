<?php

declare(strict_types=1);

namespace Notification\Fake;

use Notification\Common\AbstractCreateChannelRequest;
use Symfony\Component\Validator\Constraints as Assert;

final class CreateFakeChannelRequest extends AbstractCreateChannelRequest
{
    /**
     * @Assert\NotBlank()
     * @Assert\Valid()
     */
    public FakeChannelConfiguration $configuration;

    public function getConfiguration(): FakeChannelConfiguration
    {
        return $this->configuration;
    }
}
