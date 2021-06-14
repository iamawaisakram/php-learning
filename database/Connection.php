<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
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
