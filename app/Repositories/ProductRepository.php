<?php

namespace App\Repositories;

use App\Models\Product;
use Prettus\Repository\Eloquent\BaseRepository;

class ProductRepository extends  BaseRepository
{
    protected $fieldSearchable = [
        "name",
    ];

    public function model()
    {
        return Product::class;
    }

    public function search($attributes)
    {
        $query = $this->model->with("categories");

        if(isset($attributes['search'])){
            $query->where(function($q) use($attributes){
                foreach($this->fieldSearchable as $field){
                    $q->where($field, "LIKE", "%{$attributes['search']}%");
                }
                return $q;
            });
        }

        if(isset($attributes['per_page'], $attributes['offset'])) {
            $query->skip($attributes['per_page'] * $attributes['offset'])
                ->limit($attributes['per_page']);
        }

        return $query->get();
    }
}
