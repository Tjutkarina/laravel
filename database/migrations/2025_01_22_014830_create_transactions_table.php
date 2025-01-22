<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name');
            $table->text('addres');
            $table->text('phone');
            $table->date('date');
            $table->integer('court_id');
            $table->time('starttime');
            $table->time('endtime');
            $table->integer('duration');
            $table->integer('costume');
            $table->integer('shoes');
            $table->integer('total');
            $table->integer('grandtotal');
            $table->integer('paytotal');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
