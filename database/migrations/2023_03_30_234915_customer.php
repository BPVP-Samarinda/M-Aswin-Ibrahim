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
        Schema::create('customer', function ($table) {
            $table->id();
            $table->string('nama')->nulltable();
            $table->text('alamat')->nulltable();
            $table->date('tanggal_lahir')->default();
            $table->text('jenis_kelamin')->nulltable();
            $table->double('telpon')->nulltable();
            $table->string('status')->nulltable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
