<?php

namespace App\Services\Common;

class StaticArray
{
    const USER_ROLE_CLIENT = 0;
    const USER_ROLE_COMPANY = 1;

    const VOUCHER_STATUS_PENDING = 0;
    const VOUCHER_STATUS_PAID = 1;
    const VOUCHER_STATUS_REFUNDED = 2;
    const VOUCHER_STATUS_USED = 3;

    const VOUCHER_RECEIVER_KIND_GUEST = 0;
    const VOUCHER_RECEIVER_KIND_CLIENT = 1;
}