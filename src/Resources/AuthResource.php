<?php

namespace CauseCompanyApi\Resources;

use CauseCompanyApi\Requests\CreateCallbackRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AuthResource extends BaseResource
{
     public function callback(string $state = null, ?array $params = []): Response
     {
         return $this->connector->send(new CreateCallbackRequest($state, $params));
     }
}
