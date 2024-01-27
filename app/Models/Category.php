<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    const TABLE = "categories";
    const PRIMARY_KEY = "id";
    const NAME_COLUMN_NAME = "name";
    const IMAGE_COLUMN_NAME = "image";
    const USER_ID_COLUMN_NAME = "user_id";

    protected $table = self::TABLE;

    public function article(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, self::USER_ID_COLUMN_NAME);
    }

    public function getKey(): int
    {
        return $this->getAttributeValue(self::PRIMARY_KEY);

    }

    public function getUserId(): int
    {
        return $this->getAttributeValue(self::USER_ID_COLUMN_NAME);
    }

    public function getName(): string
    {
        return $this->getAttributeValue(self::NAME_COLUMN_NAME);

    }

    public function getImage(): string
    {
        return $this->getAttributeValue(self::IMAGE_COLUMN_NAME);
    }
}
