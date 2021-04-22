<?php

namespace Mahmudz\VueForm\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicantStoreRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:applicants',
            'phone' => 'required',
            'nid_no' => 'required',
            'educations' => 'required',
            'experiences' => 'required',
            'avatar' => 'required|image',
            'nid_front' => 'required|image',
            'nid_back' => 'required|image',
        ];
    }
}
