<?php

declare(strict_types=1);

namespace Hofmannsven\Brevo\Facades;

use Brevo\Client\Api\AccountApi;
use Brevo\Client\Api\AttributesApi;
use Brevo\Client\Api\CompaniesApi;
use Brevo\Client\Api\ContactsApi;
use Brevo\Client\Api\ConversationsApi;
use Brevo\Client\Api\CouponsApi;
use Brevo\Client\Api\CRMApi;
use Brevo\Client\Api\DealsApi;
use Brevo\Client\Api\DomainsApi;
use Brevo\Client\Api\EcommerceApi;
use Brevo\Client\Api\EmailCampaignsApi;
use Brevo\Client\Api\EventsApi;
use Brevo\Client\Api\ExternalFeedsApi;
use Brevo\Client\Api\FilesApi;
use Brevo\Client\Api\FoldersApi;
use Brevo\Client\Api\InboundParsingApi;
use Brevo\Client\Api\ListsApi;
use Brevo\Client\Api\MasterAccountApi;
use Brevo\Client\Api\NotesApi;
use Brevo\Client\Api\ProcessApi;
use Brevo\Client\Api\ResellerApi;
use Brevo\Client\Api\SendersApi;
use Brevo\Client\Api\SMSCampaignsApi;
use Brevo\Client\Api\TasksApi;
use Brevo\Client\Api\TransactionalEmailsApi;
use Brevo\Client\Api\TransactionalSMSApi;
use Brevo\Client\Api\TransactionalWhatsAppApi;
use Brevo\Client\Api\UserApi;
use Brevo\Client\Api\WebhooksApi;
use Brevo\Client\Api\WhatsAppCampaignsApi;
use Illuminate\Support\Facades\Facade;

/**
 * @method static AccountApi AccountApi(\GuzzleHttp\Client $client = null)
 * @method static AttributesApi AttributesApi(\GuzzleHttp\Client $client = null)
 * @method static CompaniesApi CompaniesApi(\GuzzleHttp\Client $client = null)
 * @method static ContactsApi ContactsApi(\GuzzleHttp\Client $client = null)
 * @method static ConversationsApi ConversationsApi()
 * @method static CouponsApi CouponsApi(\GuzzleHttp\Client $client = null)
 * @method static CRMApi CRMApi(\GuzzleHttp\Client $client = null)
 * @method static DealsApi DealsApi(\GuzzleHttp\Client $client = null)
 * @method static DomainsApi DomainsApi(\GuzzleHttp\Client $client = null)
 * @method static EcommerceApi EcommerceApi(\GuzzleHttp\Client $client = null)
 * @method static EmailCampaignsApi EmailCampaignsApi(\GuzzleHttp\Client $client = null)
 * @method static EventsApi EventsApi(\GuzzleHttp\Client $client = null)
 * @method static ExternalFeedsApi ExternalFeedsApi(\GuzzleHttp\Client $client = null)
 * @method static FilesApi FilesApi(\GuzzleHttp\Client $client = null)
 * @method static FoldersApi FoldersApi(\GuzzleHttp\Client $client = null)
 * @method static InboundParsingApi InboundParsingApi(\GuzzleHttp\Client $client = null)
 * @method static ListsApi ListsApi(\GuzzleHttp\Client $client = null)
 * @method static MasterAccountApi MasterAccountApi(\GuzzleHttp\Client $client = null)
 * @method static NotesApi NotesApi(\GuzzleHttp\Client $client = null)
 * @method static ProcessApi ProcessApi(\GuzzleHttp\Client $client = null)
 * @method static ResellerApi ResellerApi(\GuzzleHttp\Client $client = null)
 * @method static SendersApi SendersApi(\GuzzleHttp\Client $client = null)
 * @method static SMSCampaignsApi SMSCampaignsApi(\GuzzleHttp\Client $client = null)
 * @method static TasksApi TasksApi(\GuzzleHttp\Client $client = null)
 * @method static TransactionalEmailsApi TransactionalEmailsApi(\GuzzleHttp\Client $client = null)
 * @method static TransactionalSMSApi TransactionalSMSApi(\GuzzleHttp\Client $client = null)
 * @method static TransactionalWhatsAppApi TransactionalWhatsAppApi(\GuzzleHttp\Client $client = null)
 * @method static UserApi UserApi(\GuzzleHttp\Client $client = null)
 * @method static WebhooksApi WebhooksApi(\GuzzleHttp\Client $client = null)
 * @method static WhatsAppCampaignsApi WhatsAppCampaignsApi(\GuzzleHttp\Client $client = null)
 *
 * @see \Hofmannsven\Brevo\Brevo
 */ class Brevo extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'brevo';
    }
}
