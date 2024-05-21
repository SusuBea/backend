<?php

use App\Models\Szavak;
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
        Schema::create('szavaks', function (Blueprint $table) {
            $table->id();
            $table->string('angol');
            $table->string('magyar');
            $table->foreignId('temaId')->references('id')->on('temas');
            $table->timestamps();
        });

        Szavak::create(['angol' => 'knife', 'magyar' => 'kés', 'temaId' => '1' ]);
        Szavak::create(['angol' => 'table', 'magyar' => 'asztal', 'temaId' => '1' ]);
        Szavak::create(['angol' => 'apple', 'magyar' => 'alma', 'temaId' => '2' ]);
        Szavak::create(['angol' => 'pineapple', 'magyar' => 'ananász', 'temaId' => '2' ]);
        Szavak::create(['angol' => 'passport', 'magyar' => 'útlevél', 'temaId' => '4' ]);
        Szavak::create(['angol' => 'airplane', 'magyar' => 'repülő', 'temaId' => '4' ]);
        Szavak::create(['angol' => 'accommodation', 'magyar' => 'szállás', 'temaId' => '4' ]);

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szavaks');
    }
};
