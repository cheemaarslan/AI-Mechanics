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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->nullable()->constrained('customers')->onDelete('cascade');
            $table->foreignId('mechanic_id')->nullable()->constrained('mechanics')->onDelete('cascade');
            $table->foreignId('material_id')->nullable()->constrained('materials')->onDelete('cascade');
            $table->foreignId('service_id')->nullable()->constrained('services')->onDelete('cascade');
            $table->string('quantity')->nullable();
            $table->string('date');
            $table->string('total')->nullable();
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
        Schema::dropIfExists('payments');
    }
};
