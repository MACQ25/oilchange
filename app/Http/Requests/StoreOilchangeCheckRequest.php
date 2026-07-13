<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOilChangeCheckRequest extends FormRequest {

    public function authorize(): bool {
        return true;
    }


    public function rules(): array {
        return [
            'current_odometer' => 'required|integer|min:0',
            'previous_oil_change_date' => 'required|date',
            'previous_odometer' => 'required|integer|min:0|lte:current_odometer',
        ];
    }

    public function messages(): array
    {
        return [
            'previous_odometer.lte' => 'The previous odometer reading must be less than or equal to the current one.',
        ];
    }
}