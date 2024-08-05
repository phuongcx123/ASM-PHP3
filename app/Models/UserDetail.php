<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $fillable = [

        'avata_img',
        'favourite',
        'introduce',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
