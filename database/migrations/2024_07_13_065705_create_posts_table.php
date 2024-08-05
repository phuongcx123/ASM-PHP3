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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class)->constrained();
            $table->foreignIdFor(\App\Models\Category::class)->constrained();
            $table->string('title');
            $table->string('thumbnail_img')->nullable();
            $table->longText('content')->nullable();
            $table->string('slug')->unique();
            $table->integer('views')->default(0);
            $table->boolean('is_trend') -> default(false);
            $table->boolean('is_status')->default(true);
             $table->boolean('is_hot')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
