<?php

use App\Models\Tema;
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
        Schema::create('temas', function (Blueprint $table) {
            $table->id();
            $table->string('temaNev');
            $table->timestamps();
        });

        Tema::create(['temaNev' => 'konyha']);
        Tema::create(['temaNev' => 'gyümölcsök']);
        Tema::create(['temaNev' => 'helymeghatározók']);
        Tema::create(['temaNev' => 'utazás']);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temas');
    }
};
