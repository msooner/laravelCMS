<?php

namespace App\Http\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract{


    protected $availableIncludes = [];
    protected $defaultIncludes = [];

    public function transform(User $item)
    {

        return [
            'uid' => $item['uid'],
            'user_name' => $item['user_name'],
            'phone_num' => $item['phone_num'],
            'email' => $item['email'],
            'avatar'=>(string)$item['avatar'],
            
        ];
    }
}
