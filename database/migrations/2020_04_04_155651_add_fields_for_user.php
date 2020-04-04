<?php

use App\Services\Common\StaticArray;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsForUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->softDeletes();
            $table->integer('role')->default(StaticArray::USER_ROLE_CLIENT);
            $table->string('first_name')->nullable(true)->change();
            $table->string('last_name')->nullable(true)->change();
            $table->string('company_name')->nullable();
            $table->string('company_description')->nullable();
            $table->string('company_address')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bank_title')->nullable();
            $table->string('verification_video_url')->nullable();
            $table->string('verification_image_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropSoftDeletes();
            $table->dropColumn('role');
            $table->string('first_name')->nullable(false)->change();
            $table->string('last_name')->nullable(false)->change();
            $table->dropColumn('company_name');
            $table->dropColumn('company_description');
            $table->dropColumn('company_address');
            $table->dropColumn('bank_account_number');
            $table->dropColumn('bank_title');
            $table->dropColumn('verification_video_url');
            $table->dropColumn('verification_image_url');
        });
    }
}
