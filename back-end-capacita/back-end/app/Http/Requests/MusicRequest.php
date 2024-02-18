<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MusicRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255', 
            'artist' => 'required|string|max:255', 
            'album' => 'required|string|max:255', 
            'price' => 'required|numeric|gt:0', 
            'explict' => 'required|boolean'
        ];
    }
}
