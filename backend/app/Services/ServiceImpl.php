<?php

namespace App\Services;

use App\Contracts\Service;
use App\Dto\SaveFormDto;
use App\Factory\FactoryForm;

class ServiceImpl implements Service
{
    public function save(SaveFormDto $data): void
    {
        $saveForm = FactoryForm::create($data->dbEnum);
        $saveForm->save($data->name, $data->message);
    }
}
