<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJobRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'encourage_type' => 'nullable|string|max:255',
            'experience' => 'required|string|max:255',
            'education' => 'required|string|max:255',
            'pay' => 'required|numeric',
            'skills' => 'required|string|max:255',
            'deadline' => 'required|date',
            'language' => 'nullable|string|max:255',
            'status' => 'required|in:open,closed,expired',
            'visibility' => 'required|boolean',
        ];
    }
}
