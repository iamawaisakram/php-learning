<?php

class Connection
{
    public static function make($config)
    {
        try {
            return new PDO($config['connection'] . ';dbname=' .
                $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }
}

// If it was not static we could use
// $conn = new Connection();
// $conn -> make()

// But since we are using static
// we can use -> Connection::make();
