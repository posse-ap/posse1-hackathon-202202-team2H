<?php
define('DSN', 'mysql:host=posse1-hackathon-202202-team2h-db-1;dbname=diagnose;charset=utf8mb4');
define('DB_USER', 'root');
define('DB_PASS', 'password');

try {
    $db = new PDO(DSN, DB_USER, DB_PASS);
} catch(PDOException $e) {
    print('DB接続エラー:' . $e->getMessage());
}
