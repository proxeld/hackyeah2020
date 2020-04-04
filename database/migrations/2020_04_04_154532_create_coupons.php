<?php

use App\Services\Common\StaticArray;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoupons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('image');
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('fee_int');
            $table->integer('max_amount');
            $table->integer('discount_int')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('services', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('vouchers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique();
            $table->integer('voucher_status')->default(StaticArray::VOUCHER_STATUS_PENDING);
            $table->bigInteger('service_id');
            $table->bigInteger('user_id');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('vouchers', function (Blueprint $table) {
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vouchers');
        Schema::dropIfExists('services');
    }
}
