<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class BabyNameRequest extends FormRequest
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
    public function rules( Request $request ){
        return [
                    //'n_english' => 'required|max:255|unique:names,n_english,'.$request->id
                    'n_english' => 'max:255',
                    'n_bangla' => 'max:255',
                    'n_arabic' => 'max:255',
                    'n_urdu' => 'max:255',
                    'n_hindi' => 'max:255'

                    // m_english:'',
                    // m_bangla:'',
                    // m_arabic:'',
                    // m_hindi:'',
                    // m_urdu:''
        ];
    }
}
