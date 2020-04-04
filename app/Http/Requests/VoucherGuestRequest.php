<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam voucher_receiver_name string Name (optional)
 * @bodyParam voucher_receiver_email string required Email
 * @bodyParam service_id integer ID of a service.
 */
class VoucherGuestRequest extends FormRequest
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
            'voucher_receiver_name' => [
                'nullable',
                'max:255'
            ],
            'voucher_receiver_email' => [
                'required',
                'email'
            ],
            'service_id' => [
                'required',
                'integer'
            ]
        ];
    }
}
