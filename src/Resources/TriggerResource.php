<?php

namespace CauseCompanyApi\Resources;

use CauseCompanyApi\Requests\GetAllTriggersRequest;
use CauseCompanyApi\Requests\GetTriggerRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class TriggerResource extends BaseResource
{
     public function all(): Response
     {
         return $this->connector->send(new GetAllTriggersRequest);
     }

     public function find(string $state): Response
     {
         return $this->connector->send(new GetTriggerRequest($state));
     }
}
