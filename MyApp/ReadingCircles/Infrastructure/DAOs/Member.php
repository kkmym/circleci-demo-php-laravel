<?php

namespace MyApp\ReadingCircles\Infrastructure\DAOs;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $primaryKey = 'member_id';
    protected $guarded = [
        'member_id',
    ];
}
