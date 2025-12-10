<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateConferenceRequest extends FormRequest
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
            'title'           => ['required', 'string', 'max:255'],
            'description'     => ['required', 'string'],
            'conference_date' => ['required', 'date'],
            'address'         => ['required', 'string', 'max:255'],
            'participants'    => ['nullable', 'integer', 'min:1'],
            'city'            => ['nullable', 'string', 'max:255'],
        ];
    }
}
