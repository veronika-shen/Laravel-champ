<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * @property int $id
 * @property string $name
 * @property Collection<Product> $products
 */
class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
