<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=> 'required|string|min:3|max:250',
            'description'=> 'required|string|max255',
            'price' => 'required|decimal:0,2'
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'Il titolo è obbligatorio.',
            'title.max' => 'Il titolo non può superare i :max caratteri.',
            'description.required' => 'La descrizione è obbligatoria.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
        ];
    }
}
