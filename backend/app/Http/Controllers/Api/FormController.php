<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Service;
use App\Enums\TargetEnum;
use App\Http\Requests\SaveRequest;
use OpenApi\Attributes as OA;


class FormController
{

    public function __construct(
        private readonly Service $service
    )
    {

    }


    #[OA\Post(
        path: "/api/v1/save",
        summary: "Создание",
        requestBody: new OA\RequestBody(
            content: new OA\JsonContent(
                properties: [
                    new OA\Property(
                        property: 'name',
                        type: 'string',
                    ),
                    new OA\Property(
                        property: 'message',
                        type: 'string',
                    ),
                ]
            )
        ),
        tags: ["Form"],
        responses: [
            new OA\Response(
                response: 200,
                description: 'OK',
                content: new OA\JsonContent(
                )
            ),
        ]
    )]

    public function save(SaveRequest $request): void
    {
        $saveData = $request->toSaveFormDto(TargetEnum::DB);
        $this->service->save($saveData);
    }
}
