<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|min:5|max:100',
            'description' => 'min:5|max:255',
            'thumb' => 'min:5|max:255',
            'price' => 'min:4|max:20',
            'series' => 'min:5|max:100',
            'type' => 'min:5|max:100',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il campo titolo é obbligatorio',
            'title.min' => 'Il titolo deve essere lungo minimo 5 caratteri',
            'title.max' => 'Il titolo deve essere lungo massimo 100 caratteri',
            'description.min' => 'La descrizzione deve essere lunga minimo 5 caratteri',
            'description.max' => 'La descrizzione deve essere lunga massimo 255 caratteri',
            'thumb.min' => 'Il link(img) deve essere lungo minimo 5 caratteri',
            'thumb.max' => 'Il link(img) deve essere lungo massimo 255 caratteri',
            'price.min' => 'Il prezzo deve essere lungo minimo 4 caratteri',
            'price.max' => 'Il prezzo deve essere lungo massimo 20 caratteri',
            'series.min' => 'Il campo serie deve avere un contenuto lungo minimo 5 caratteri',
            'series.max' => 'Il campo serie deve avere un contenuto lungo massimo 100 caratteri',
            'type.min' => 'Il campo tipologgia deve avere un contenuto lungo minimo 5 caratteri',
            'type.max' => 'Il campo tipologgia deve avere un contenuto lungo massimo 100 caratteri',
        ];
    }
}
