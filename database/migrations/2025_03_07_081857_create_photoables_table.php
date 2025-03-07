<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('photoables', function (Blueprint $table) {
            $table->foreignId('photo_id')->constrained();
            $table->morphs('photoable');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('photoables');
    }
};
