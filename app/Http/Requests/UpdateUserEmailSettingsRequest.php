<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserEmailSettingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ( auth()->user()->provider == 'pop3_imap') {
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'provider_imap_srv'  => 'required',
            'provider_imap_port' => 'required',
            'provider_imap_ssl'  => 'required',
            'provider_smtp_srv'  => 'required',
            'provider_smtp_port' => 'required',
            'provider_smtp_ssl'  => 'required',
        ];
    }
}