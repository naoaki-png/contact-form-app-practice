<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'email',
        'address',
        'detail'
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
