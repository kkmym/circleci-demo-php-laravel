<?php

namespace MyApp\ReadingCircles\Infrastructure\Repositories;

use MyApp\ReadingCircles\Domain\Models\MemberRepositoryInterface;
use MyApp\ReadingCircles\Domain\Models\Member;
use MyApp\ReadingCircles\Domain\Models\MemberLoginId;

class MemberRepository implements MemberRepositoryInterface
{
    public function persist(Member $member)
    {

    }

    public function queryByLoginId(MemberLoginId $loginId)
    {

    }
}
