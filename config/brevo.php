<?php

declare(strict_types=1);

return [

    /*
     * ----------------------------------------------------
     * Brevo API Key
     * ----------------------------------------------------
     *
     * Getting started with the Brevo API:
     * https://developers.brevo.com/docs/getting-started#quick-start
     *
     * Get your API key:
     * https://app.brevo.com/settings/keys/api
     */

    'api_key' => env('BREVO_API_KEY', null),

    'partner_key' => env('BREVO_PARTNER_KEY', null),

];
