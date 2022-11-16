create table product(
    id unique INT PRIMARY_KEY,
    name VARCHAR(64),
    price INT,
);

insert into products values (1, 'iphone XR', 250);
insert into products values (2, 'iphone SE', 250);
insert into products values (3, 'iphone 11', 250);
insert into products values (4, 'iphone XS', 250);
insert into products values (5, 'iphone 12', 250);
insert into products values (6, 'iphone 13', 250);
insert into products values (7, 'iphone 14', 250);
insert into products values (8, 'iphone 14 pro', 250);
insert into products values (9, 'iphone 6S', 250);
insert into products values (10, 'iphone 7', 250);

create table orders (
    id unique int PRIMARY_KEY,
    product_id int,
    price int,
    date varchar(120);
);

insert into orders values (1, 4, 250, '22-10-2022');
insert into orders values (2, 1, 250, '22-10-2022');
insert into orders values (3, 10, 250, '22-10-2022');
insert into orders values (4, 5, 250, '22-10-2022');
insert into orders values (5, 3, 250, '22-10-2022');
insert into orders values (6, 4, 250, '22-10-2022');
insert into orders values (7, 7, 250, '22-10-2022');
insert into orders values (8, 9, 250, '22-10-2022');
insert into orders values (9, 9, 250, '22-10-2022');
insert into orders values (10, 4, 250, '22-10-2022');