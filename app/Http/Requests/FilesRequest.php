<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilesRequest extends FormRequest
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
            'title' => sprintf(
              'required|string|unique:posts,title,%s', $this->post->title
            ),
            'description' => 'required|min:8|max:255|string',
        ];
    }

    public function messages()
    {
        return [
            'file' => 'required',
            'nome' => 'required|email'
        ];
    }

}
