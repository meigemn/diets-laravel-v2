<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diet extends Model
{
    use SoftDeletes, HasFactory;
    protected $fillable=[
        'title',
        'description',
        'totalCalories',
        'date'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
