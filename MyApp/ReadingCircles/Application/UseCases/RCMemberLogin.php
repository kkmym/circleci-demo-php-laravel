<?php

namespace MyApp\ReadingCircles\Application\UseCases;


use Auth;
use MyApp\ReadingCircles\Domain\Models\MemberLoginId;
use MyApp\ReadingCircles\Domain\Models\MemberRepositoryInterface;

class RCMemberLogin
{
    protected $memberRepo;

    public function __construct(MemberRepositoryInterface $memberRepo)
    {
        $this->memberRepo = $memberRepo;
    }

    public function attemptLogin(string $loginId)
    {
        // ログイン処理
        Auth::guard('rcmember')->attempt(['loginId' => $loginId]);
        return true;
    }

}
