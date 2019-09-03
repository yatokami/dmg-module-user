<?php

namespace Module\User\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [//默认查询字段
        'name', 'email', 'password',
    ];

    protected $hidden = [//隐藏字段
        'password',
    ];
}
