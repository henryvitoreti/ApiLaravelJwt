<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "name",
        "slug",
        "price",
    ];

    protected $hidden = [
        "created_at",
        "updated_at",
        "deleted_at",
    ];

    /**
     * @return BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, "categories_products", "product_id", "category_id");
    }

    const RULES = [
        "categories" => "required",
        "categories.*" => "required",
        "categories.*.id" => "required",
        "name" => "required|max:254",
        "price" => "required|integer|max:9999999999",
    ];
}
