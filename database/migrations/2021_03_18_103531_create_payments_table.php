<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
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
            $table->date('date');
            $table->integer('member_id')->length(11);
            $table->string('type')->default('');
            $table->string('payment_type')->default('');
            $table->tinyInteger('accept_status')->default(0);
            $table->tinyInteger('approved_by')->default(0);
            $table->string('trnxid')->default(0);
            $table->string('from_number')->default(0);
            $table->string('to_number')->default(0);
            $table->string('note')->default('n/a');
            $table->decimal('amount', 10, 2);
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
}
