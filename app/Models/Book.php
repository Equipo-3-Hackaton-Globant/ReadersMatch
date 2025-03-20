<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Book
 *
 * @package App\Models
 */
class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected array $fillable = [
        'user_id',
        'title',
        'author',
        'publisher',
        'observation',
        'format',
        'imgURL',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected array $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the user that owns the book.
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the users who favorited this book.
     *
     * @return BelongsToMany
     */
    public function favoritedByUsers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'book_user');
    }
}

