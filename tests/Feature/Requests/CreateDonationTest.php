<?php

declare(strict_types=1);

use CauseCompanyApi\CauseCompanyApi;
use CauseCompanyApi\Requests\CreateDonationRequest;
use CauseCompanyApi\Responses\CauseCompanyApiResponse;

test('can create donation', function () {
    $causecompanyapi = new CauseCompanyApi('$Mm@Or14M6Xl5vwO');
    $causecompanyapi->withMockClient(mockClient());

    $response = $causecompanyapi->send(new CreateDonationRequest('9d142d49-7c4d-42ee-96b4-a43c491c78ac'));

    expect($response)->toBeInstanceOf(CauseCompanyApiResponse::class);
});
