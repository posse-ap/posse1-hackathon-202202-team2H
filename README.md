# posse1-hackathon-202202-team2H
html, css, jsはhtmlフォルダの中で記述してください


# Dockerの動かし方
## 1. docker-compose build

## 2. docker-compose up -d

## 3. docker psでdbコンテナの名前を確認。
pc環境によって posse1-hackathon-202202-team2h-db-1 と posse1-hackathon-202202-team2h_db_1 の場合がございます。そちらを確認してください。

## 4. dbホスト名を変更
dbconnect.php2行目を以下のように編集お願いします。
### posse1-hackathon-202202-team2h-db-1の場合
define('DSN', 'mysql:host=posse1-hackathon-202202-team2h-db-1;dbname=diagnose;charset=utf8mb4');
### posse1-hackathon-202202-team2h_db_1の場合
define('DSN', 'mysql:host=posse1-hackathon-202202-team2h_db_1;dbname=diagnose;charset=utf8mb4');

## 5. URLにアクセス
http://localhost:8080
