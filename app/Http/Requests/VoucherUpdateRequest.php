<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam voucher_status integer required <a target="_blank" href="/documentation/voucher-status">Status</a>
 *
 */
class VoucherUpdateRequest extends FormRequest
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
            'voucher_status' => [
                'required',
                'integer'
            ]
        ];
    }
}
