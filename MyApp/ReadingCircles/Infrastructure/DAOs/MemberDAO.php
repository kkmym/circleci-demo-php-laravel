<?php

namespace MyApp\ReadingCircles\Infrastructure\DAOs;

use Illuminate\Database\Eloquent\Model;

class MemberDAO extends Model
{
    protected $primaryKey = 'member_id';
    protected $table = 'members';
    protected $guarded = [
        'member_id',
    ];
}
