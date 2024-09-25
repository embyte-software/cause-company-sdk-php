<?php

declare(strict_types=1);

namespace CauseCompanyApi;

use CauseCompanyApi\Requests\CreateDonationRequest;
use CauseCompanyApi\Requests\GetAllTriggersRequest;
use Saloon\Http\Connector;
use Saloon\Http\Auth\TokenAuthenticator;
use CauseCompanyApi\Responses\CauseCompanyApiResponse;
use DonationResource;
use Saloon\Http\Response;
use TriggerResource;

class CauseCompanyApi extends Connector
{
    public function __construct(
        protected readonly string $token,
        protected readonly string $version = 'v1'
    ) {}

    /**
     * Define the custom response
     *
     * @var string|null
     */
    protected ?string $response = CauseCompanyApiResponse::class;

    /**
     * Resolve the base URL of the service.
     *
     * @return string
     */
    public function resolveBaseUrl(): string
    {
        return "https://cause-company.eu-1.sharedwithexpose.com/api/{$this->version}";
    }

    /**
     * Define default headers
     *
     * @return string[]
     */
    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }

    /**
     * Authentication
     */
    protected function defaultAuth(): TokenAuthenticator
    {
        return new TokenAuthenticator($this->token);
    }

    /**
     * Trigger resource
     */
    public function trigger(): TriggerResource
    {
        return new TriggerResource($this);
    }

    /**
     * Donation resource
     */
    public function donation(): DonationResource
    {
        return new DonationResource($this);
    }
}
