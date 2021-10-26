drop table if exists reviews;
CREATE TABLE reviews (
                         id SERIAL PRIMARY KEY,
                         name VARCHAR(100) COMMENT 'Имя',
                         orderName BIGINT UNIQUE COMMENT 'Номер заказа',
                         email VARCHAR(255)  UNIQUE COMMENT 'Почта',
                         text_review VARCHAR(255) COMMENT 'Текст отзыва'
) COMMENT = 'База данных отзывов';

INSERT INTO reviews VALUES
(NULL,'Андрей',155,'aa@mail.ru','Отлично');
