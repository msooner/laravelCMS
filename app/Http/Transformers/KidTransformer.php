<?php

namespace App\Http\Transformers;

use App\Kid;
use League\Fractal\TransformerAbstract;

class KidTransformer extends TransformerAbstract{


    protected $availableIncludes = [];
    protected $defaultIncludes = [];

    public function transform(Kid $item)
    {

        return [
            'kid' => $item->kid,
            'kid_name' => $item->kid_name,
            'birth' => $item->birth,
            'avatar'=>(string)$item->avatar,
            'uid' => $item->uid,

        ];
    }
}
