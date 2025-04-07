<?php

namespace CauseCompanyApi\Resources;

use CauseCompanyApi\Requests\GetAppRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppResource extends BaseResource
{
     public function find(string $id): Response
     {
         return $this->connector->send(new GetAppRequest($id));
     }
}
