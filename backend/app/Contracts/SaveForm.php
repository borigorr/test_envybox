<?php

namespace App\Contracts;

interface SaveForm {

    public function save(string $name, string $message): void;
}
