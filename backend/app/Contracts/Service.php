<?php

namespace App\Contracts;

use App\Dto\SaveFormDto;

interface Service
{
    public function save(SaveFormDto $data): void;
}
