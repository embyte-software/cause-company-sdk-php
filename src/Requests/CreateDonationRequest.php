<?php

declare(strict_types=1);

namespace CauseCompanyApi\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateDonationRequest extends Request implements HasBody
{
    use HasJsonBody;

    /**
     * HTTP Method
     *
     * @var Method
     */
    protected Method $method = Method::POST;

    public function __construct(
        protected string $triggerId,
        protected float $amount,
    ){}

    protected function defaultBody(): array
    {
        return [
            'trigger_id' => $this->triggerId,
            'amount' => $this->amount,
        ];
    }

    /**
     * Resolve the endpoint
     *
     * @return string
     */
    public function resolveEndpoint(): string
    {
        return '/donation';
    }
}
