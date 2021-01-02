<?php
require __DIR__ . '/../app/controller/logout.php';

class LogOutTest extends \PHPUnit\Framework\TestCase
{
    
    public function testIfLogOutSuccessful(){
        $user = new App\controller\logout;
        $this->assertTrue($user->log_out());
    }

}

?>