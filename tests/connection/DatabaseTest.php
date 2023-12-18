<?php
use app\config\Database;
use PHPUnit\Framework\TestCase;



class DatabaseTest extends TestCase{

    public function test_if_there_is_a_connection(){
        $conn = Database::getConnection();
        $this->assertNotNull($conn);
    }
}