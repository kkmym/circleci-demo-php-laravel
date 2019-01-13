<?php

namespace MyApp\ReadingCircles\Domain\Models;

class MemberLoginId
{
    protected $loginId;

    public function __construct(string $loginId)
    {
        // @TODO ログインIDとしての妥当性チェック
        $this->loginId = $loginId;
    }

    public function value()
    {
        return $this->loginId;
    }
}
