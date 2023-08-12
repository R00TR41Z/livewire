<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    public $filleble =[
        'title',
        'content'
    ];

    public function user(){
        $this->belongsTo(User::class);
    }
}
