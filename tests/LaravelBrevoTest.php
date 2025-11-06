<?php

declare(strict_types=1);

namespace Hofmannsven\Brevo\Tests;

use Brevo\Client\Configuration;
use Hofmannsven\Brevo\BrevoServiceProvider;
use Hofmannsven\Brevo\Facades\Brevo;
use Orchestra\Testbench\TestCase as Orchestra;
use PHPUnit\Framework\Attributes\Test;

final class LaravelBrevoTest extends Orchestra
{
    #[Test]
    public function it_tests_if_configuration_is_instance_of_brevo_client(): void
    {
        $this->assertInstanceOf(Configuration::class, Brevo::getConfiguration());
    }

    #[Test]
    public function it_tests_if_configuration_is_set(): void
    {
        $config = new Configuration;
        $brevo = new Brevo;
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

    #[Test]
    public function it_tests_create_contact_model_instantiation(): void
    {
        // This test demonstrates the CORRECT way to create a contact
        $createContact = new \Brevo\Client\Model\CreateContact();
        $createContact['email'] = '[email protected]';
        $createContact['attributes'] = ['FIRSTNAME' => 'John', 'LASTNAME' => 'Doe'];
        $createContact['listIds'] = [1];
        $createContact['updateEnabled'] = true;

        // Verify the model is properly instantiated
        $this->assertInstanceOf(\Brevo\Client\Model\CreateContact::class, $createContact);
        $this->assertEquals('[email protected]', $createContact['email']);
        $this->assertEquals(['FIRSTNAME' => 'John', 'LASTNAME' => 'Doe'], $createContact['attributes']);
        $this->assertEquals([1], $createContact['listIds']);
        $this->assertTrue($createContact['updateEnabled']);
    }

    /**
     * @param  \Illuminate\Foundation\Application  $app
     */
    protected function getEnvironmentSetUp($app): void
    {
        $app['config']->set('brevo.api_key', 'my_api_key');
        $app['config']->set('brevo.partner_key', 'my_partner_key');
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
}
