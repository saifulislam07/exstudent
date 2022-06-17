<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact_person')->default('');
            $table->string('contact_designation')->default('');
            $table->string('contact_email')->default('');
            $table->string('contact_person_phone')->default('');
            $table->string('email')->unique();
            $table->string('phone')->default(0);
            $table->string('establishment')->default(0);
            $table->string('dob')->default('0000-00-00');
            $table->string('area')->default('');
            $table->string('blood')->default(0);
            $table->string('divisions')->default(0);
            $table->string('district')->default(0);
            $table->string('thana')->default(0);
            $table->string('industry_type')->default('');
            $table->string('image')->default('');
            $table->string('cv')->default('');
            $table->string('trade_license')->default('');
            $table->string('company')->default('');
            $table->string('url')->default('');
            $table->string('gender')->default(0);
            $table->string('c_designation')->default('');
            $table->string('education')->default('');
            $table->string('e_uv')->default('');
            $table->string('e_year')->default('');
            $table->string('address')->default('');
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('payment')->default(0);
            $table->tinyInteger('type')->default(1);
            $table->string('designation')->default('');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
    
}
