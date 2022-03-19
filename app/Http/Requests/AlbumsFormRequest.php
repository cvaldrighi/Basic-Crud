<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlbumsFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'catalog' => 'required',
            'artist' => 'required',
            'name' => 'required',
            'year' => 'required',
            'gender' => 'required'
        ];
    }
}
