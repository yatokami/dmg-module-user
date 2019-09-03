<?php

namespace Module\User\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'u_user';
    protected $primaryKey = 'userid';

    protected $fillable = [//默认查询字段
        'name', 'email', 'password',
    ];

    protected $hidden = [//隐藏字段
        'password',
    ];
}
