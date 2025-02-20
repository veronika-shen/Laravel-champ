<?php

namespace App\Models;

use Illuminate\http\Request;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Collection;

/**
 * @property int $id
 * @property string $name
 * @property int $price
 * @property Collection<Category> $category
 */

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public static function filter(Request $request){
        $query = Product::query();

        if($request->has('category_id') && $request->category_id !== 'all'){
            $query->where('category_id', $request->category_id);
        }

        return $query->get();
    }
}
