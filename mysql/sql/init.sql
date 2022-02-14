CREATE TABLE choices (
    id INT PRIMARY KEY AUTO_INCREMENT,
    choice_text TEXT NOT NULL,
    score INT NOT NULL,
    question_id INT NOT NULL,
    FOREIGN KEY (question_id) REFERENCES questions (id) ON DELETE RESTRICT ON UPDATE RESTRICT
);

CREATE TABLE questions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title TEXT NOT NULL
);


insert into questions ()
