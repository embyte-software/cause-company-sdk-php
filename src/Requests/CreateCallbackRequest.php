<?php

declare(strict_types=1);

namespace CauseCompanyApi\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateCallbackRequest extends Request implements HasBody
{
    use HasJsonBody;

    /**
     * HTTP Method
     *
     * @var Method
     */
    protected Method $method = Method::POST;

    public function __construct(
        protected ?string $state,
        protected ?array $params,
    ){}

    /**
     * Resolve the endpoint
     *
     * @return string
     */
    public function resolveEndpoint(): string
    {
        return '/auth/callback';
    }

    protected function defaultBody(): array
    {
        return [
            'state' => $this->state,
            'params' => $this->params,
        ];
    }
}
