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

    public function __call(string $name, array $arguments)
    {
        $class = "Brevo\\Client\Api\\{$name}";

        return ! isset($arguments[0]) ? new $class(
            null,
            $this->getConfiguration()
        ) : new $class($arguments[0], $this->getConfiguration());
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
