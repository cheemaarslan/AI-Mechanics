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
        Schema::create('service_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->nullable()->constrained('customers')->onDelete('cascade');
            $table->foreignId('mechanic_id')->nullable()->constrained('mechanics')->onDelete('cascade');
            $table->string('order_no');
            $table->string('service_name');
            $table->string('slug');
            $table->string('order_date');
            $table->string('order_type');
            $table->integer('quantity');
            $table->decimal('service_price');
            $table->decimal('total');
            $table->string('description');
            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('service_transactions');
    }
};
