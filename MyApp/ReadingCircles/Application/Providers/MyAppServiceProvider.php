<?php

namespace MyApp\ReadingCircles\Application\Providers;

use MyApp\ReadingCircles\Application\Auth\RCGuard;
use Illuminate\Support\ServiceProvider;
use MyApp\ReadingCircles\Domain\Models\MemberRepositoryInterface;
use MyApp\ReadingCircles\Infrastructure\Repositories\MemberRepository;

class MyAppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app['auth']->extend('rcmember_guard', function($app, $name, array $config) {
            return new RCGuard();
        });
    }

    public function register()
    {
        $this->app->bind(MemberRepositoryInterface::class, MemberRepository::class);
    }
}