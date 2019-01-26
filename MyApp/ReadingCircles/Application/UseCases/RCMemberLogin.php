<?php

namespace MyApp\ReadingCircles\Application\UseCases;


use MyApp\ReadingCircles\Domain\Models\MemberLoginId;
use MyApp\ReadingCircles\Domain\Models\MemberRepositoryInterface;

class RCMemberLogin
{
    protected $memberRepo;

    public function __construct(MemberRepositoryInterface $memberRepo)
    {
        $this->memberRepo = $memberRepo;
    }

    public function authLoginCredential(string $loginId)
    {
        $memberLoginId = new MemberLoginId($loginId);

    }

}
