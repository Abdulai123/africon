<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:255',
            'description' => 'required|string',
            'industry' => 'required|string|max:255',
            'website' => 'nullable|url|max:255',
            'contact' => 'nullable|string|max:255',
            'employee_range_from' => 'required|integer|min:1', 
            'employee_range_to' => 'required|integer|min:2',
            'established_year' => 'nullable|integer|min:1900|max:' . date('Y'),
            'location' => 'required|string|min:1|max:255',
        ];
    }
}
