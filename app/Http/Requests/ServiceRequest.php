<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam warning boolean If true return errors if credits are lower than payment value
 * @bodyParam title string(min:1,max:255) Payment Title
 * @bodyParam fee_int big-integer required Publishing fee.
 * @bodyParam fee_currency string required Currency for fee (max:3, min:3).
 * @bodyParam payment_method integer required <a target="_blank" href="/documentation/payment-methods">Payment Method</a>
 * @bodyParam payment_status integer required <a target="_blank" href="/documentation/payment-status">Payment Status</a>
 * @bodyParam payment_details string(min:1,max:255) Payment Details
 * @bodyParam paid_at data Date of a payment
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
            'warning' => [
                'nullable'
            ],
            'title' => [
                'nullable',
                'max:255',
                'min:1'
            ],
            'fee_int' => [
                'required',
                'integer'
            ],
            'fee_currency' => [
                'required',
                'max:3',
                'min:3',
            ],
            'payment_method' => [
                'required',
                'integer'
            ],
            'payment_status' => [
                'required',
                'integer'
            ],
            'payment_details' => [
                'nullable',
                'max:255',
                'min:1'
            ],
            'paid_at' => [
                'nullable',
                'date'
            ]
        ];
    }
}
