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

    public function login(string $loginId)
    {
        $memberLoginId = new MemberLoginId($loginId);

    }

}
