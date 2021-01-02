<?php
require __DIR__ . '/../app/controller/remove_control.php';

class RemoveControlTest extends \PHPUnit\Framework\TestCase
{
    
    public function test_if_remove_user_can_be_set(){
        $_POST['removeuser'] = "value";
        $this->assertEquals("value", isRemoveUserSet());
    }

}

?>