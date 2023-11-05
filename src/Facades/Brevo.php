<?php

declare(strict_types=1);

namespace Hofmannsven\Brevo\Facades;

use Illuminate\Support\Facades\Facade;

class Brevo extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'brevo';
    }
}
