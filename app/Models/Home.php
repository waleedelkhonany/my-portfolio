<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $table = 'home';

    protected $fillable = [
        'name',
        'email',
        'title',
        'description',
        'image',
        'social_links',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    // Accessor to get social links as an array
    public function getSocialLinksAttribute($value)
    {
        return json_decode($value, true);
    }
}
