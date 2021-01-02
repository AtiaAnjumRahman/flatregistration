<?php
require __DIR__ . '/../app/controller/forgot_control.php';

class ForgotTest extends \PHPUnit\Framework\TestCase
{

    public function test_if_forgot_password(){
        $_POST['forgotpass'] = true;
        $this->assertTrue(hasForgottenPassword());
    }

    public function test_if_password_can_be_reset(){
        $_POST['secretpin'] = true;
        $this->assertTrue(canSetPassword());
    }

}

?>