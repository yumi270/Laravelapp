<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|max:100',
            'create' => 'max:1000',
            'published_at' => 'required|date_format:Y-m-d H:i',
        ];

    }

    public function attributes()
    {
        return [
            'title' => 'タイトル',
            'create' => '内容',
            'published_at' => '公開日',
        ];
    }
}
