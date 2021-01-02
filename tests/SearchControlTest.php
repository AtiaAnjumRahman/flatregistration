<?php
require __DIR__ . '/../app/controller/search_control.php';

class SearchControlTest extends \PHPUnit\Framework\TestCase
{
    
    public function test_if_search_set(){
        $_POST['search'] = "value";
        $this->assertTrue(isSearchSet());
    }

}

?>