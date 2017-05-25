<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $table = 'users';
    protected $primaryKey='id';
    public $timestamps=false;

    public function show()
    {
        $users = User::all()->toArray();

        return $users;
    }

    public function edit($id)
    {
        $users = User::where('id',$id)->get()->toarray();

        return $users;
    }



}
