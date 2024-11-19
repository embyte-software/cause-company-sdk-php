<?php

use CauseCompanyApi\Requests\CreateDonationRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class DonationResource extends BaseResource
{
     public function create(string $triggerId, float $amount): Response
     {
         return $this->connector->send(new CreateDonationRequest($triggerId, $amount));
     }
}
