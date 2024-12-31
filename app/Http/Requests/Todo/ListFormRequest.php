<?php

namespace App\Http\Requests\Todo;

use Illuminate\Foundation\Http\FormRequest;

class ListFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'page' => 'integer'
        ];
    }
}
