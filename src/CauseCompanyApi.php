<?php

declare(strict_types=1);

namespace CauseCompanyApi;

use Saloon\Http\Connector;
use Saloon\Http\Auth\TokenAuthenticator;
use CauseCompanyApi\Resources\AuthResource;
use CauseCompanyApi\Resources\TriggerResource;
use CauseCompanyApi\Resources\DonationResource;
use CauseCompanyApi\Responses\CauseCompanyApiResponse;

class CauseCompanyApi extends Connector
{
    public function __construct(
        protected readonly string $token,
        protected readonly string $version = 'v1',
        protected readonly bool $testmode = false,
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
        return $this->testmode
            ? "https://cause-company.embyte.nl/api/{$this->version}"
            : "https://app.causecompany.com/api/{$this->version}";
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

    /**
     * Auth resource
     */
    public function auth(): AuthResource
    {
        return new AuthResource($this);
    }
}
