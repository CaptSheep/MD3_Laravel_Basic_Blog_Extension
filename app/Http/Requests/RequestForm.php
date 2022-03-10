<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestForm extends FormRequest
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
            'name'=>'required|min:5|max:10',
            'title'=>'required|min:5|max:50',
            'content'=>'required|min:5|max:255',
        ];
    }

    public function messages()
    {
        $message = [
          'name.required'=>'Your name can not be empty',
          'name.min'=>'Your name must have at least 5 characters',
          'name.max'=>'Your name can not have more than 10 characters',
          'title.required'=>'Your title can not be empty',
          'title.min'=>'Your title must have at least 5 characters',
          'title.max'=>'Your title can not have more than 50 characters',
          'content.required'=>'Your content can not be empty',
          'content.min'=>'Your content must have at least 5 characters',
          'content.max'=>'Your content can not have more than 255 characters',
        ];
        return $message;
    }
}
