<?php

use Demo\App\UserService;

/**
 * @covers Demo\App\UserService
 */
class UserServiceTestBad extends PHPUnit\Framework\TestCase
{
    public function testUserRegistrationAndLogin()
    {
        $userService = new UserService();

        // Register User
        $result = $userService->register('username', 'password');
        $this->assertTrue($result);

        // Login User
        $result = $userService->login('username', 'password');
        $this->assertTrue($result);

        // Check if User is Logged In
        $isLoggedIn = $userService->isLoggedIn('username');
        $this->assertTrue($isLoggedIn);

        // Logout User
        $userService->logout('username');
        $isLoggedIn = $userService->isLoggedIn('username');
        $this->assertFalse($isLoggedIn);
    }
}