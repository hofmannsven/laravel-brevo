<?php

declare(strict_types=1);

namespace Hofmannsven\Brevo;

use Brevo\Client\Configuration;

class Brevo
{
    private Configuration $configuration;

    public function __construct()
    {
        $this->configuration = Configuration::getDefaultConfiguration()->setApiKey('api-key', config('brevo.api_key'));

        if (config('brevo.partner_key')) {
            $this->configuration->setApiKey('partner-key', config('brevo.partner_key'));
        }
    }

    public function getConfiguration(): Configuration
    {
        return $this->configuration;
    }

    public function setConfiguration(Configuration $configuration): void
    {
        $this->configuration = $configuration;
    }
}
