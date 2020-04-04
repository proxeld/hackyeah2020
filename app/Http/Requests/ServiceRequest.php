<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 *
 * @bodyParam title string(min:1,max:255) Payment Title
 * @bodyParam description text(max:2000) Description/Message.
 * @bodyParam image string(min:1,max:255) Path to image
 * @bodyParam fee_int integer required Fee.
 * @bodyParam max_voucher_numbers integer nullable Max numbers of available vouchers.
 * @bodyParam discount_int integer required Fee.
 *
 */
class ServiceRequest extends FormRequest
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
            'title' => [
                'nullable',
                'max:255',
                'min:1'
            ],
            'description' => [
                'string',
                'nullable',
                'max:2000'
            ],
            'image' => [
                'nullable',
                'max:255',
                'min:1'
            ],
            'fee_int' => [
                'required',
                'integer'
            ],
            'max_voucher_numbers' => [
                'nullable',
                'integer',
            ],
            'discount_int' => [
                'nullable',
                'integer'
            ],
        ];
    }
}
