<?php

namespace App\Http\Requests;
use App\Rules\SkillRuleRequest;
use Illuminate\Foundation\Http\FormRequest;

class SkillRequest extends FormRequest
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
            'name'=>['required',new SkillRuleRequest],
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'you must fill the title',
            'title.min'=>'Just one letter don\'t be stingy',
        ];
    }
}
