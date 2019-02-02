<?php

namespace MyApp\ReadingCircles\Application\Auth;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Authenticatable;

use MyApp\ReadingCircles\Domain\Models\MemberRepositoryInterface;

use MyApp\ReadingCircles\Domain\Models\Member;
use MyApp\ReadingCircles\Domain\Models\MemberId;
use MyApp\ReadingCircles\Domain\Models\MemberLoginId;

class RCGuard implements Guard
{
    protected $rcMember;
    protected $memberRepo;

    public function __construct(MemberRepositoryInterface $memberRepo)
    {
        $this->memberRepo = $memberRepo;
    }

    /**
     * Determine if the current user is authenticated.
     *
     * @return bool
     */
    public function check()
    {
        return !is_null($this->user());
    }

    /**
     * Determine if the current user is a guest.
     *
     * @return bool
     */
    public function guest()
    {
        return !$this->check();
    }

    /**
     * Get the currently authenticated user.
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function user()
    {
        // ユーザー情報を持っていたら、それを返す
        if (!is_null($this->rcMember)) {
            return $this->rcMember;
        }

        // セッション上の情報から、ユーザー情報を復元
        $loginId = session('loginId');
        if ($loginId != null) {
            \Cookie::queue('loginId', $loginId, 1440);
            $serialized = session($loginId);
            $member = unserialize($serialized);
            $rcMember = new RCAuthedMember($member);
            $this->setUser($rcMember);
            return $rcMember;
        }

        // 復元できかなった場合は、Cookieの情報からDBのデータを取得しユーザー情報を作成
        $loginIdInCookie = \Cookie::get('loginId');
        if ($loginIdInCookie != null) {
            $member = $this->memberRepo->queryByLoginId(new MemberLoginId($loginIdInCookie));
            $rcMember = new RCAuthedMember($member);
            $this->setUser($rcMember);
            return $rcMember;
        }

        return null;
    }

    /**
     * @return RCAuthedMember|null
     */
    public function rcMember()
    {
        $user = $this->user();
        if (is_null($user) || !($user instanceof RCAuthedMember)) {
            return null;
        }

        return $user;
    }

    /**
     * Get the ID for the currently authenticated user.
     *
     * @return int|null
     */
    public function id()
    {
        return $this->user()->getAuthIdentifier();
    }

    /**
     * Validate a user's credentials.
     *
     * @param  array  $credentials
     * @return bool
     */
    public function validate(array $credentials = [])
    {
        return true;
    }

    /**
     * Set the current user.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @return void
     */
    public function setUser(Authenticatable $user)
    {
        $this->rcMember = $user;
    }
}
