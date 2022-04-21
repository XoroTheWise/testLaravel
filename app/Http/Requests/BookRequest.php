<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'string|max:50|min:1|required',
            'author_id' => 'required|integer',
            'genres' => 'required|array',
            'genres.*.*' => 'required|unique:genres',
        ];
    }
}
