<?php

declare(strict_types=1);

namespace CauseCompanyApi\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetAllTriggersRequest extends Request
{
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
        return '/trigger';
    }
}
