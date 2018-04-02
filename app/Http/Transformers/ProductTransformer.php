<?php

namespace App\Http\Transformers;


use League\Fractal\TransformerAbstract;
use App\Product;
class ProductTransformer extends TransformerAbstract{


    protected $availableIncludes = [];
    protected $defaultIncludes = [];

    public function transform(Product $item)
    {

        return [
            'pid' => $item->pid,
            'product_name' => $item->product_name,



        ];
    }
}
