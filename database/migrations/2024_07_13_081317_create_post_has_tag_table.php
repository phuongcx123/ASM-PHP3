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
        Schema::create('post_has_tag', function (Blueprint $table) {

            $table->foreignIdFor(\App\Models\Post::class)->constrained();
            $table->foreignIdFor(\App\Models\HasTag::class)->constrained();
            $table->primary(['post_id', 'has_tag_id']);
            
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_has_tag');
    }
};
