<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->enum('status', ['placed', 'processed', 'shipped']);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('delivery_id')->nullable()->constrained('deliveries')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
