<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;


    protected $fillable = [

        'title',
        'category_id',
        'thumbnail_img',
        'content',
        'slug',
        'views',
        'is_trend',
        'is_status',
        'is_hot' ,
        'user_id',
    ];
    protected $casts = [
        'is_status' => 'boolean',
        'is_hot' => 'boolean',
        'is_trend' => 'boolean',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tags()
    {
        return $this->belongsToMany(HasTag::class, 'post_has_tag', 'post_id' , 'has_tag_id');
    }
    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Carbon::parse($value)->format('d/m/Y'),
        );
    }

    protected function updatedAt(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Carbon::parse($value)->format('d/m/Y'),
        );
    }

}
