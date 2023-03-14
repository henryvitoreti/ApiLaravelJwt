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
        $query = $this->model->newQuery();

        if(isset($attributes['search'])){
            $query->where(function($q) use($attributes){
                foreach($this->fieldSearchable as $field){
                    $q->where($field, "LIKE", "%{$attributes['search']}%");
                }
                return $q;
            });
        }

        if(isset($attributes['limit'], $attributes['offset'])) {
            $query->skip($attributes['limit'] * $attributes['offset'])
                ->limit($attributes['limit']);
        }

        return $query->get();
    }
}
