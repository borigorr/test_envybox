<?php

namespace App\Factory;

use App\Contracts\SaveForm;
use App\Models\Form;

class SaveFormDb implements SaveForm
{
    public function save(string $name, string $message): void
    {
        Form::create([
            'name' => $name,
            'message' => $message,
        ]);
    }
}
