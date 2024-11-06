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
        Schema::create('returns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('loan_details_id');
            $table->boolean('charge')->default(false);;
            $table->integer('amount');
            $table->timestamps();

            $table->foreign('load_details_id')->references('id')->on('loan_details')
            ->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('returns', function (Blueprint $table) {
            $table->dropConstrainedForeignId('loan_details_id');
        }); 
        Schema::dropIfExists('returns');
    }
};
