<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('TRANSACTION_NO')->unsigned();
            $table->string('type')->comment("is LEND or LOAN or PAYMENT depending on what the user clicked");
            $table->decimal('amount');
            $table->integer('account_id');

            $table->timestamps();

            $table->index(['TRANSACTION_NO', 'id']);
            $table->unique('TRANSACTION_NO');
//            $table->foreign('status_id')->references('id')->on('statuses');
//            $table->foreign('account_id')->references('id')->on('accounts');
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
