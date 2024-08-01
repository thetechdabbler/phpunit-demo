<?php

use Demo\App\Mailer;
use Demo\App\UserService;

/**
 * @covers Demo\App\UserService
 * @group user
 */
class UserServiceTest extends PHPUnit\Framework\TestCase
{
    private $mailer;
    function setUp(): void
    {
        $this->mailer = $this->createMock(Mailer::class);
        $this->mailer->method('sendWelcomeMail')
            ->willReturn(true);
    }
    public function testUserRegistration()
    {

        $userService = new UserService($this->mailer);
        $this->mailer->expects($this->once())
            ->method('sendWelcomeMail')
            ->with($this->equalTo('user@email'))
        ;
        $result = $userService->register('username', 'password');

        $this->assertTrue($result);
    }

    public function testUserLogin()
    {
        $userService = new UserService($this->mailer);
        $userService->register('username', 'password');
        $this->mailer->expects($this->never())

            ->method('sendWelcomeMail');
        $result = $userService->login('username', 'password');
        $this->assertTrue($result);
    }

    public function testIsUserLoggedIn()
    {
        $userService = new UserService($this->mailer);
        $userService->register('username', 'password');
        $userService->login('username', 'password');
        $isLoggedIn = $userService->isLoggedIn('username');
        $this->assertTrue($isLoggedIn);
    }

    public function testUserLogout()
    {
        $userService = new UserService($this->mailer);
        $userService->register('username', 'password');
        $userService->login('username', 'password');
        $userService->logout('username');
        $isLoggedIn = $userService->isLoggedIn('username');
        $this->assertFalse($isLoggedIn);
    }
}