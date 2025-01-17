<?php

declare(strict_types=1);

use CauseCompanyApi\CauseCompanyApi;
use CauseCompanyApi\Requests\GetAllTriggersRequest;
use CauseCompanyApi\Responses\CauseCompanyApiResponse;

test('can retrieve all triggers from the api', function () {
    $causecompanyapi = new CauseCompanyApi('$Mm@Or14M6Xl5vwO');
    $causecompanyapi->withMockClient(mockClient());

    $response = $causecompanyapi->send(new GetAllTriggersRequest);

    expect($response)->toBeInstanceOf(CauseCompanyApiResponse::class);
});
