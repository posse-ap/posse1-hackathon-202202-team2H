<?php
define('DSN', 'mysql:host=posse_diagnose-db-1;dbname=diagnose;charset=utf8mb4');
define('DB_USER', 'root');
define('DB_PASS', 'password');
try {
    $db = new PDO(DSN, DB_USER, DB_PASS);
    print('接続成功');
} catch(PDOException $e) {
    print('DB接続エラー:' . $e->getMessage());
}
