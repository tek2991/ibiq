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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('purpose_of_visit');
            $table->string('designation');
            $table->string('grade_pay');
            $table->string('employee_id');
            $table->date('from_date');
            $table->date('to_date');
            $table->integer('no_of_persons');
            $table->foreignId('establishment_id')->constrained('establishments');
            $table->foreignId('division_id')->constrained('divisions');
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
        Schema::dropIfExists('bookings');
    }
};
