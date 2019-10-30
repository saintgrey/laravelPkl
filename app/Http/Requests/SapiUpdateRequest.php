<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SapiUpdateRequest extends FormRequest
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
            'id_jenis_sapi' => 'required',
            'umur' => 'required',
            'jumlah'=>'required',
            'deskripsi'=>'required',
            'foto'=>'image',
            //
        ];
    }
}
