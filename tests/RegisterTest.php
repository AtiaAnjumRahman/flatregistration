<?php
require __DIR__ . '/../app/controller/register_control.php';

class RegisterTest extends \PHPUnit\Framework\TestCase
{
    
    public function test_if_correct_username_returned(){
        setUsername("atia");
        $this->assertEquals("atia", getUsername());
    }


    public function test_if_correct_mobile_returned(){
        setMobile("13245");
        $this->assertEquals("13245", getMobile());
    }

    public function test_if_correct_fullname_returned(){
        setFullname("atia anjum rahman");
        $this->assertEquals("atia anjum rahman", getFullname());
    }

}

?>