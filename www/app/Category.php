<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'type',
        'percentage',
        'percentage2',
        'half_percentage',
        'percentage3',
        'supplier_dicount_percent'
    ];



    public function products()
    {
        return $this->hasMany(Product::class, 'main_category_id', 'id')
            ->where('is_service', 0);
    }

    public function productsSubCategory()
    {
        return $this->hasMany(Product::class, 'sub_category_id', 'id')
            ->where('is_service', 0);
    }
}
