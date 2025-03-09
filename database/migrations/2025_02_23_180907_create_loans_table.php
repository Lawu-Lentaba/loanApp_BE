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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->datetime('agreement_date');
            $table->datetime('loan_date');
            $table->string('loan_ref');
            $table->string('interest_code');
            $table->string('loan_code');
            $table->string('loan_type');
            $table->string('last_calculation');
            $table->string('loan_status_id');
            $table->string('loan_reason');
            $table->float('loan_interest');
            $table->float('principal_amount');
            $table->float('interest_amount');
            $table->integer('grace_period');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
