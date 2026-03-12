<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{ 
    use HasFactory;

    // If your primary key is not 'id', you need to specify it like this:
    protected $primaryKey = 'book_id';

    public function author() : BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
