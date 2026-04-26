<?php

namespace App\Factory;

use App\Contracts\SaveForm;
use App\Enums\TargetEnum;

class FactoryForm
{
    public static function create(TargetEnum $data): SaveForm
    {
        return match ($data) {
            TargetEnum::DB => new SaveFormDb(),
        };
    }
}
