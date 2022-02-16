use mysql;
alter user 'root'@'%' identified with mysql_native_password by 'password';

DROP DATABASE IF EXISTS diagnose;
CREATE DATABASE diagnose;
USE diagnose;

DROP TABLE IF EXISTS choices;
DROP TABLE IF EXISTS questions;
DROP TABLE IF EXISTS categories;


CREATE TABLE categories (
    category_id INT PRIMARY KEY AUTO_INCREMENT,
    title TEXT NOT NULL
);

INSERT INTO categories (title) VALUE ('意識高い');


CREATE TABLE questions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title TEXT NOT NULL,
    category_id INT NOT NULL
);

INSERT INTO questions (title, category_id) VALUES ('どちらの言葉が好きですか?', 1), ('どちらの言葉が好きですか?', 1), ('海外旅行に行く目的は?', 1), ('どちらが大事?', 1), ('あなたはどちらですか？', 1);


CREATE TABLE choices (
    id INT PRIMARY KEY AUTO_INCREMENT,
    choice_text TEXT NOT NULL,
    score INT NOT NULL,
    question_id INT NOT NULL
);

INSERT INTO choices (choice_text, score, question_id) VALUES
('アジェンダ', 1, 1),
('議題', 0, 1),
('ハングリーであれ、愚か者であれ。', 1, 2),
('天上天下唯我独尊', 0, 2),
('レジャー', 0, 3),
('自分探し', 1, 3),
('人脈', 1, 4),
('スキル', 0, 4),
('windows固執派', 0, 5),
('Apple信者', 1, 5);
