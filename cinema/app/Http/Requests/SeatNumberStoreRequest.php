<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeatNumberStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'hall_id' => 'exists:hall,id',
            'rowNumber' => 'integer|max:25',
            'seatNumber' => 'integer|max:25',
            'type_id' => 'exists:type,id'
        ];
    }
}
