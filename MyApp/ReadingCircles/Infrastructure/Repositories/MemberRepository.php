<?php

namespace MyApp\ReadingCircles\Infrastructure\Repositories;

use MyApp\ReadingCircles\Domain\Models\MemberRepositoryInterface;
use MyApp\ReadingCircles\Domain\Models\Member;
use MyApp\ReadingCircles\Domain\Models\MemberLoginId;
use MyApp\ReadingCircles\Domain\Models\MemberId;
use MyApp\ReadingCircles\Infrastructure\DAOs\MemberDAO;

class MemberRepository implements MemberRepositoryInterface
{
    protected $memberDao;

    public function __constract(MemberDAO $memberDao)
    {
        $this->memberDao = $memberDao;
    }

    public function persist(Member $member)
    {

    }

    public function queryByLoginId(MemberLoginId $loginId) : Member
    {
        // @todo 実際にDBにアクセスして取得するよう変更
        return new Member(new MemberId(1), $loginId, 'testuser', 'TestUser');
    }
}
