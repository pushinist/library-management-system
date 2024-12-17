<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('book_readers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('reader_id');
            $table->date('when_given')->default(now());
            $table->date('return_before')->default(now()->addDays(30));
            $table->date('when_returned')->nullable();
            $table->enum('status', ['given', 'returned', 'overstayed'])->default('given');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_reader');
    }
};
