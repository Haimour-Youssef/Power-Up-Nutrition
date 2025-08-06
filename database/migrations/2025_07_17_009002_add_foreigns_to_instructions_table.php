<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('instructions', function (Blueprint $table) {
            $table
                ->foreign('recette_id')
                ->references('id')
                ->on('recettes')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('instructions', function (Blueprint $table) {
            $table->dropForeign(['recette_id']);
        });
    }
};
