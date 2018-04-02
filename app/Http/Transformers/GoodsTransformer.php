<?php

namespace App\Http\Transformers;

use App\Goods;
use League\Fractal\TransformerAbstract;

class GoodsTransformer extends TransformerAbstract{


    protected $availableIncludes = [];
    protected $defaultIncludes = [];

    public function transform(Goods $item)
    {

        return [
            'gid' => $item['gid'],
            'pid' => $item['pid'],
            'kid' => $item['kid'],
            'uid' => $item['uid'],

        ];
    }
}
