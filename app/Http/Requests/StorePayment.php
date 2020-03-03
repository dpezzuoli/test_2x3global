<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePayment extends FormRequest
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
            'client_id' => 'required|integer',
            'clp_usd' => 'numeric|nullable',
            'payment_date' => 'date|nullable',
            'expires_at' => 'date|nullable',
            'status' => 'string|nullable',
        ];
    }
}
