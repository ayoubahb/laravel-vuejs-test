<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    const TABLE = "articles";
    const PRIMARY_KEY = "id";
    const NAME_COLUMN_NAME = "name";
    const IMAGE_COLUMN_NAME = "image";
    const DESCRIPTION_COLUMN_NAME = "description";
    const USER_ID_COLUMN_NAME = "user_id";
    const CATEGORY_ID_COLUMN_NAME = "category_id";

    protected $table = self::TABLE;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, self::USER_ID_COLUMN_NAME);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, self::CATEGORY_ID_COLUMN_NAME);
    }
}
