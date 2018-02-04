<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');

            $table->string('ACC_NO');
            $table->integer('currency_id');
            $table->decimal('amount');
            $table->string('type')
                ->default("USER")
                ->comment('The account can be a normal USER or ADMIN for now');
            $table->integer('user_id')->unsigned();
            $table->timestamps();


            $table->index(['ACC_NO', 'id']);
            $table->unique('ACC_NO');
//            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
