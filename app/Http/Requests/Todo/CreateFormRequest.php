<?php

namespace App\Http\Requests\Todo;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'content' => 'required|string',
            'status' => 'nullable|in:pending,ongoing,completed',
            'category_id' => 'required|exists:categories,id'
        ];
    }
}
