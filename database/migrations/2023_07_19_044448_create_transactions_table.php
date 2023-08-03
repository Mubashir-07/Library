<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cust_id')->nullable();
            $table->foreign('cust_id')->references('id')->on('customers');
            $table->unsignedBigInteger('book_id')->nullable();
            $table->foreign('book_id')->references('id')->on('books');
            $table->date('taken_at');
            $table->string('days');
            $table->date('return_at');
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
        Schema::dropIfExists('transactions');
    }
}
