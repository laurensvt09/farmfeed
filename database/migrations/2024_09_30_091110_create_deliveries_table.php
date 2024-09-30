<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['in_transit', 'delivered']);
            $table->dateTime('expected_arrival_time');
            $table->string('route');
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('deliveries');
    }
}

