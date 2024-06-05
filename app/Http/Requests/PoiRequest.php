<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PoiRequest extends FormRequest
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
            'name' => 'required',
            'indirizzo' => 'required',
            'latitudine' => 'required',
            'longitudine' => 'required',

        ];
    }

    public function messages(){
        return[
            'name.required' => 'Il nome è richiesto',
            'indirizzo.required' => 'L indirizzo è richiesto',
            'latitudine.required' => 'La latitudine  è richiesa',
            'longitudine.required' => 'La longitudine  è richiesa',
        ];
    }
}
