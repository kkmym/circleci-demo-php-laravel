<?php

namespace MyApp\ReadingCircles\Application\Auth;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Authenticatable;

class RCGuard implements Guard
{
    protected $rcMember;

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

        // キャッシュ上の情報から、ユーザー情報を復元
        $this->rcMember = new RCMember();
        return $this->rcMember;

        // 復元できかなった場合は、Cookieの情報からDBのデータを取得しユーザー情報を作成
    }

    /**
     * @return RCMember|null
     */
    public function rcMember()
    {
        $user = $this->user();
        if (is_null($user) || !($user instanceof RCMember)) {
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

    }
}
