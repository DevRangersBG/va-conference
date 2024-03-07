<?php

namespace App\Http\Requests\Conference;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email:filter|max:255',
            'phone' => 'required|string|max:20',
            'participant_type' => 'required|exists:participant_types,id',
            'report_title' => 'nullable|string|max:255',
            'report_file_path.*' => 'file|nullable|mimes:docx|extensions:docx,doc|max:2048',
            'report_details' => 'nullable|string|max:255',
            'keywords' => 'nullable|string|max:255',
            'thematic_area' => 'nullable|exists:thematic_areas,id',
            'certificate' => 'required|boolean',
        ];
    }
}
