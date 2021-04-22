<?php

namespace Mahmudz\VueForm\Http\Controllers;

use Mahmudz\VueForm\Http\Requests\ApplicantStoreRequest;
use Mahmudz\VueForm\Services\ApplicantService;

class ApplicantController
{
    /**
     * @var ApplicantService
     */
    private $applicantService;

    public function __construct(ApplicantService $applicantService)
    {
        $this->applicantService = $applicantService;
    }

    /**
     * @param ApplicantStoreRequest $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function store(ApplicantStoreRequest $request)
    {
        $this->applicantService->create($request);

        return response()->json(true);
    }
}