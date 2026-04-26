<?php

namespace App\Http\Requests;

use App\Dto\SaveFormDto;
use App\Enums\TargetEnum;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class SaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'message' => ['required', 'string'],
        ];
    }

    public function toSaveFormDto(TargetEnum $dbEnum): SaveFormDto
    {
        return new SaveFormDto(
            name: $this->input('name'),
            message: $this->input('message'),
            dbEnum: $dbEnum
        );
    }
}
