<?php
require __DIR__ . '/../app/controller/login_control.php';

class LoginTest extends \PHPUnit\Framework\TestCase
{

    public function test_if_correct_email_returned(){
        setEmail("atia@gmail.com");
        $this->assertEquals("atia@gmail.com", getEmail());
    }

    public function test_if_correct_password_returned(){
        setPassword("atia123");
        $this->assertEquals("atia123", getPassword());
    }

}

?>