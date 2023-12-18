<?php 
namespace app\config;

use Expection;
use mysqli;

class Database {

    public static function getConnection() {
        $envPath = realpath(dirname(__FILE__)
            . '/../env.ini');
        $env = parse_ini_file($envPath);
        $conn = new Mysqli($env['host'],
            $env['username'],
            $env['password'],
            $env['database']);
        
        if($conn->connect_error) {

            return null;
        }
        return $conn;
    }
}