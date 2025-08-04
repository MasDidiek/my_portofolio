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
       Schema::create('portofolios', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('shortdesc')->nullable(); // ringkasan singkat
            $table->text('longdesc')->nullable();    // deskripsi panjang
            $table->enum('difficulty', ['Simple', 'Moderate', 'Complex', 'Very Complex'])->default('Simple');
            $table->string('link_app')->nullable();  // link demo/aplikasi
            $table->enum('status', ['Running', 'Archived'])->default('Running'); // true = tampil, false = sembunyi
            $table->string('image')->nullable();     // path gambar/thumbnail
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolios');
    }
};
