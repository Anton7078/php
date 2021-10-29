ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'aasd';
drop table if exists products;
create table products (
                          id SERIAL PRIMARY KEY,
                          name VARCHAR(100) COMMENT 'Имя',
                          describes VARCHAR(255)  COMMENT 'Описание',
                          images VARCHAR(255) UNIQUE COMMENT 'Путь к картинке',
                          price BIGINT COMMENT 'Цена'
) COMMENT = 'База данных товаров';

insert into products values
(null, 'Товар 1','Описание 1','img/1.jpg',100),
(null, 'Товар 2','Описание 2','img/2.jpg',200),
(null, 'Товар 3','Описание 3','img/3.jpg',300),
(null, 'Товар 4','Описание 4','img/4.jpg',400),
(null, 'Товар 5','Описание 5','img/5.jpg',500),
(null, 'Товар 6','Описание 6','img/6.jpg',600);