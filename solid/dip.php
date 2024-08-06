<?php

//悪い例
// class MySqlDatabase
// {
//     public function connect(): void
//     {
//         echo htmlspecialchars('MySQLに接続します');
//     }

// }

// class DataProcessor
// {
//     private $database;

//     public function __construct()
//     {
//         $this->database = new MySqlDatabase();
//     }

//     public function processData(): void
//     {
//         $this->database->connect();
//         echo htmlspecialchars('データを処理します');
//     }
// }

//良い例

interface a
{
    public function connect(): void;
}

class MySqlDatabase implements a
{
    public function connect(): void
    {
        echo htmlspecialchars('MySQLに接続します');
    }

}

class PostgreSqlDatabase implements a
{
    public function connect(): void
    {
        echo htmlspecialchars('PostgreSQLに接続します');
    }

}

class DataProcessor
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function processData(): void
    {
        $this->database->connect();
        echo htmlspecialchars('データを処理します');
    }
}

$database = new MySqlDatabase();
$dataProcessor = new DataProcessor($database);
$dataProcessor->processData();

$database = new PostgreSqlDatabase();
$dataProcessor = new DataProcessor($database);
$dataProcessor->processData();
