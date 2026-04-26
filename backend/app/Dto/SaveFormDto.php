<?php

namespace App\Dto;

use App\Enums\TargetEnum;

readonly class SaveFormDto
{
    public function __construct(
        public string $name,
        public string $message,
        public TargetEnum $dbEnum
    ) {}
}
