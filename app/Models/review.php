<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class review extends Model
{
    protected $fillable = ['review', 'rating'];
    use HasFactory;
    public function books()
    {
        return $this->belongsTo(Book::class);
    }
}
