<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'isbn',
        'title',
        'description',
        'author_id',
        'publisher',
        'year',
        'cover',
        'status',
    ];

    protected $casts = [
        'year' => 'integer',
    ];

    // Relasi Many-to-One ke Author
    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    // Relasi Many-to-Many ke Category (ditulis 1 kali saja)
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}