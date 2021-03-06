<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditProjectRequest extends Request
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
         'name'=>'required|unique:projects', 
               ];
    }

     public function messages(){

        return [
            'name.required' => '项目名称是必填的！',
            'name.unique' => '很抱歉，该名称已被占用！',
          
        ];
    } 
}
