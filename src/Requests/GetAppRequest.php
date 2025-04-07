<?php

declare(strict_types=1);

namespace CauseCompanyApi\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetAppRequest extends Request
{
    public function __construct(
        protected readonly string $id,
    ) {}

    /**
     * HTTP Method
     *
     * @var Method
     */
    protected Method $method = Method::GET;

    /**
     * Resolve the endpoint
     *
     * @return string
     */
    public function resolveEndpoint(): string
    {
        return '/app/' . $this->id;
    }
}
