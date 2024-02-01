<?php

namespace App\Http\Requests;

use App\Rules\AnnouncementsRuleRequest;
use Illuminate\Foundation\Http\FormRequest;

class announcementsRequest extends FormRequest
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
            'title'=>['required',new AnnouncementsRuleRequest],
            'descreption'=>'required|string',
            'skills'=>'required|string',
            'company_id'=>'required|integer'

        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'you must fill the title',
            'title.min'=>'title so short',
            'title.max' => 'male it smaller',
            'descreption.required' => 'descreption required',
            'descreption.string' => 'descreption must be string',
            'skills.required' => 'skills must be filled out',
            'skills.string' => 'skills must be string',
            'company_id.integer'=>'choose a company',
            'company_id.required' =>    'choose a company '
        ];
    }
}
