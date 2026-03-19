<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{ 
    use HasFactory, SoftDeletes;

    // If your primary key is not 'id', you need to specify it like this:
    protected $primaryKey = 'book_id';

    protected $fillable = [
        'title',
        'author_id',
    ];

    public function author() : BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
