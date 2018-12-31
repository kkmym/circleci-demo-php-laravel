<?php
use App\User;

$I = new FunctionalTester($scenario);
$I->wantTo('edit a profile');

$user = User::create(['email' => 'johndoe@example.com', 'password' => bcrypt('password')]);
$I->amOnPage('/login');
$I->fillField('email', 'johndoe@example.com');
$I->fillField('password', 'password');
$I->click('button[type=submit]');

$I->amOnPage('/users/1');
$I->see('johndoe@example.comとしてログイン中');

$I->click('Edit');
$I->fillField('Email', 'john@doe.com');
$I->click('Update');

$I->seeCurrentUrlEquals('/users/1');
$I->see('john@doe.comとしてログイン中');
