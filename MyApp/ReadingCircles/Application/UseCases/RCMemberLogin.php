<?php

namespace MyApp\ReadingCircles\Application\UseCases;

use MyApp\ReadingCircles\Domain\Models\MemberRepositoryInterface;
use MyApp\ReadingCircles\Domain\Models\MemberLoginId;
use MyApp\ReadingCircles\Application\Auth\RCAuthedMember;
use Auth;

class RCMemberLogin
{
    /**
     * @var MemberRepositoryInterface
     */
    protected $memberRepo;

    public function __construct(MemberRepositoryInterface $memberRepo)
    {
        $this->memberRepo = $memberRepo;
    }

    public function attemptLogin(string $loginId)
    {
        // DBへの照合
        $member = $this->memberRepo->queryByLoginId(new MemberLoginId($loginId));

        // セッションにデータをセット

        // Guardにユーザー情報をセット
        Auth::guard('rcmember')->setUser(new RCAuthedMember($member));

        return true;
    }

    public function loginBySessionInfo()
    {

    }
}
