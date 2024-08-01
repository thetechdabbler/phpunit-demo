<?php

use Demo\App\UserService;

/**
 * @covers Demo\App\UserService
 */
class UserServiceTest extends PHPUnit\Framework\TestCase
{
    public function testUserRegistration()
    {
        $userService = new UserService();
        $result = $userService->register('username', 'password');
        $this->assertTrue($result);
    }

    public function testUserLogin()
    {
        $userService = new UserService();
        $userService->register('username', 'password');
        $result = $userService->login('username', 'password');
        $this->assertTrue($result);
    }

    public function testIsUserLoggedIn()
    {
        $userService = new UserService();
        $userService->register('username', 'password');
        $userService->login('username', 'password');
        $isLoggedIn = $userService->isLoggedIn('username');
        $this->assertTrue($isLoggedIn);
    }

    public function testUserLogout()
    {
        $userService = new UserService();
        $userService->register('username', 'password');
        $userService->login('username', 'password');
        $userService->logout('username');
        $isLoggedIn = $userService->isLoggedIn('username');
        $this->assertFalse($isLoggedIn);
    }
}