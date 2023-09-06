<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['description', 'product_id'];

    /**
     * Get the comment's ID.
     */
    public function getId(): int
    {
        return $this->attributes['id'];
    }

    /**
     * Set the comment's ID.
     */
    public function setId(int $id): void
    {
        $this->attributes['id'] = $id;
    }

    /**
     * Get the comment's description.
     */
    public function getDescription(): string
    {
        return $this->attributes['description'];
    }

    /**
     * Set the comment's description.
     */
    public function setDescription(string $desc): void
    {
        $this->attributes['description'] = $desc;
    }

    /**
     * Get the product ID associated with the comment.
     */
    public function getProductId(): int
    {
        return $this->attributes['product_id'];
    }

    /**
     * Set the product ID associated with the comment.
     */
    public function setProductId(int $pId): void
    {
        $this->attributes['product_id'] = $pId;
    }

    /**
     * Get the product that the comment belongs to.
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the product that the comment belongs to.
     *
     * @return \App\Models\Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * Set the product that the comment belongs to.
     *
     * @param  \App\Models\Product  $product
     */
    public function setProduct($product): void
    {
        $this->product = $product;
    }
}
