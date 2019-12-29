/* Testé sous MySQL 5.x */

CREATE DATABASE IF NOT EXISTS `planandcook` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `planandcook`;

drop table if exists T_INGREDIENT;
drop table if exists T_RECIPE;
drop table if exists T_USER;
drop table if exists T_MENU;

create table T_INGREDIENT (
  ING_ID integer primary key auto_increment,
  ING_NAME varchar(100) not null,
  REC_ID integer not null,
  constraint fk_rec_ing foreign key(REC_ID) references T_RECIPE(REC_ID)
  ) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;

create table T_RECIPE (
  REC_ID integer primary key auto_increment,
  REC_NAME varchar(100) not null,
  REC_CONTENT varchar(500) not null,
  ING_ID integer not null,
  constraint fk_ing_rec foreign key(ING_ID) references T_INGREDIENT(ING_ID)
  ) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;

create table T_USER (
  USR_ID integer primary key auto_increment,
  USR_LOGIN varchar(100) not null,
  USR_EMAIL varchar(100) not null,
  USR_PWD varchar(100) not null,
  ) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;

create table T_MENU (
  MEN_ID integer primary key auto_increment,
  REC_ID integer not null,
  constraint fk_rec_men foreign key(REC_ID) references T_RECIPE(REC_ID)
  ) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;

insert into T_RECIPE(REC_NAME, REC_CONTENT) values
(NOW(), 'Chicken Pineapple Stir Fry', 'Some content');
insert into T_RECIPE(REC_NAME, REC_CONTENT) values
(NOW(), 'Homemade Burgers', 'Some content');
insert into T_RECIPE(REC_NAME, REC_CONTENT) values
(NOW(), 'Homemade Fish Sticks', 'Some content');

insert into T_INGREDIENT(ING_NAME, REC_ID) values
(NOW(), 'Chicken', 1);
insert into T_INGREDIENT(ING_NAME, REC_ID) values
(NOW(), 'Pineapple', 1);
insert into T_INGREDIENT(ING_NAME, REC_ID) values
(NOW(), 'Soy sauce', 1);
insert into T_INGREDIENT(ING_NAME, REC_ID) values
(NOW(), 'Green oignion', 1);
insert into T_INGREDIENT(ING_NAME, REC_ID) values
(NOW(), 'Pineapple', 1);
insert into T_INGREDIENT(ING_NAME, REC_ID) values
(NOW(), 'Beef', 2);
insert into T_INGREDIENT(ING_NAME, REC_ID) values
(NOW(), 'Ruccola', 2);
insert into T_INGREDIENT(ING_NAME, REC_ID) values
(NOW(), 'Fish', 3);

insert into T_USER(USR_LOGIN, USR_EMAIL, USR_PWD) values
('admin', '53089@etu.he2b.be', 'secret');

insert into T_MENU(REC_ID) values
(NOW(), 1);
(NOW(), 2);
(NOW(), 3);