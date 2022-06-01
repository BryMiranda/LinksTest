<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_loans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id');
            $table->date('request_at');
            $table->date('assigned_at');
            $table->date('returned_at');
            $table->unsignedBigInteger('request_user_id');
            $table->unsignedBigInteger('loan_user_id');
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
        Schema::dropIfExists('book_loans');
    }
}
