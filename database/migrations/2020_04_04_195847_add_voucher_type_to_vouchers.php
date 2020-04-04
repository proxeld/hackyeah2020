<?php

use App\Services\Common\StaticArray;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVoucherTypeToVouchers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vouchers', function (Blueprint $table) {
            $table->bigInteger('user_id')->nullable()->change();
            $table->integer('voucher_receiver_kind')->default(StaticArray::VOUCHER_RECEIVER_KIND_GUEST);
            $table->string('voucher_receiver_email')->nullable();
            $table->string('voucher_receiver_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vouchers', function (Blueprint $table) {
            $table->bigInteger('user_id')->nullable(false)->change();
            $table->dropColumn('voucher_receiver_kind');
            $table->dropColumn('voucher_receiver_email');
            $table->dropColumn('voucher_receiver_name');
        });
    }
}
