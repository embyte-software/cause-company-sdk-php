<?php

use CauseCompanyApi\Requests\GetAllTriggersRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class TriggerResource extends BaseResource
{
     public function all(): Response
     {
         return $this->connector->send(new GetAllTriggersRequest);
     }
}
