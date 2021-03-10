<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_address', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer_id')->index();
            $table->unsignedInteger('order_id');
            $table->string('customer_email');
            $table->string('customer_phone')->nullable();
            $table->string('customer_first_name');
            $table->string('customer_last_name');
            $table->string('billing_first_name');
            $table->string('billing_last_name');
            $table->string('billing_address_1');
            $table->string('billing_address_2')->nullable();
            $table->string('billing_city');
            $table->string('billing_state');
            $table->string('billing_zip');
            $table->string('billing_country');
            $table->string('shipping_first_name');
            $table->string('shipping_last_name');
            $table->string('shipping_address_1');
            $table->string('shipping_address_2')->nullable();
            $table->string('shipping_city');
            $table->string('shipping_state');
            $table->string('shipping_zip');
            $table->string('shipping_country');
            $table->decimal('sub_total', 18, 4)->unsigned();
            $table->string('shipping_method');
            $table->decimal('shipping_cost', 18, 4)->unsigned();
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billing_address');
    }
}
