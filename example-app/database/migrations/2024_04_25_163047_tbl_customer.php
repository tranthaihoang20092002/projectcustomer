<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_customer',function(Blueprint $table){
$table->id();
$table->string('cus_name');
$table->string('cus_email');
$table->string('cus_password');
$table->string('cus_phone');
$table->string('cus_image');
$table->string('cus_mssv');
$table->string('cus_sothich');
$table->timestamps();// Tạo hai trường created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_customer');
    }
};
