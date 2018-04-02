<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//use Illuminate\Database\Eloquent\SoftDeletes;
class Goods extends Model
{
    //
    protected $table = 'goods';
    //  use softDeletes;


    public $primaryKey = 'gid';
    public $timestamps = false;


    /**
     * 应该被调整为日期的属性
     *
     * @var array
     */
    // protected $dates = ['deleted_at'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
