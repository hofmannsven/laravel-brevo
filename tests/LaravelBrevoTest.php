<?php

declare(strict_types=1);

namespace Hofmannsven\Brevo\Tests;

use Brevo\Client\Configuration;
use Hofmannsven\Brevo\BrevoServiceProvider;
use Hofmannsven\Brevo\Facades\Brevo;
use Orchestra\Testbench\TestCase as Orchestra;
use PHPUnit\Framework\Attributes\Test;

class LaravelBrevoTest extends Orchestra
{
    /**
     * @param  \Illuminate\Foundation\Application  $app
     */
    protected function getEnvironmentSetUp($app): void
    {
        $app['config']->set('brevo.api_key', 'my_api_key');
        $app['config']->set('brevo.my_partner_key', 'my_partner_key');
    }

    /**
     * @param  \Illuminate\Foundation\Application  $app
     */
    protected function getPackageProviders($app): array
    {
        return [
            BrevoServiceProvider::class,
        ];
    }

    /**
     * @param  \Illuminate\Foundation\Application  $app
     */
    protected function getPackageAliases($app): array
    {
        return [
            'Brevo' => Brevo::class,
        ];
    }

    #[Test]
    public function it_tests_if_configuration_is_instance_of_brevo_client(): void
    {
        $this->assertInstanceOf(Configuration::class, Brevo::getConfiguration());
    }

    #[Test]
    public function it_tests_if_configuration_is_set(): void
    {
        $config = new Configuration();
        $brevo = new Brevo();
        $brevo::setConfiguration($config);
        $this->assertEquals($config, $brevo::getConfiguration());
    }

    #[Test]
    public function it_tests_if_config_keys_are_set(): void
    {
        $config = Brevo::getConfiguration();
        $this->assertEquals($config->getApiKey('api-key'), config('brevo.api_key'));
        $this->assertEquals($config->getApiKey('partner-key'), config('brevo.partner_key'));
    }
}
