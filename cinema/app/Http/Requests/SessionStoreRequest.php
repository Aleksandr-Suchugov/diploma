<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SessionStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'movie_id' => 'exists:movie,id',
            'hall_id' => 'exists:hall,id',
            'sessionStart' => 'date_format:H:i',
            'duration' => 'numeric',
            'sessionEnd' => 'date_format:H:i'
        ];
    }
}
