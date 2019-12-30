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
  constraint fk_ing_rec foreign key (REC_ID) references T_RECIPE (REC_ID)
  ) ENGINE=InnoDB;

create table T_RECIPE (
  REC_ID integer primary key auto_increment,
  REC_NAME varchar(100) not null,
  REC_CONTENT varchar(500) not null,
  ING_ID integer not null,
  ) ENGINE=InnoDB;

create table T_USER (
  USR_ID integer primary key auto_increment,
  USR_LOGIN varchar(100) not null,
  USR_EMAIL varchar(100) not null,
  USR_PWD varchar(100) not null,
  ) ENGINE=InnoDB;

create table T_MENU (
  MEN_ID integer primary key auto_increment,
  REC_ID integer not null,
  constraint fk_men_rec foreign key (REC_ID) references T_RECIPE (REC_ID)
  ) ENGINE=InnoDB;

insert into T_RECIPE(REC_NAME, REC_CONTENT) values
('Chicken Pineapple Stir Fry', 'Drain pineapple, reserving juice; set pineapple aside. In a small bowl, mix pineapple juice, cornstarch and ginger until smooth. Stir in broth, brown sugar and soy sauce. In a large skillet, heat 4 tablespoons oil over medium heat. Add chicken; cook and stir until no longer pink. Stir-fry vegetables in remaining oil until crisp-tender. Serve with rice.');
insert into T_RECIPE(REC_NAME, REC_CONTENT) values
('Homemade Burgers', 'In a small bowl, mix ground beef, soy sauce, mustard, salt and pepper. Form burgers and leave aside. Prepare the sauce with garlic, mayonnaise and greek yogurt. In a large skillet, heat 4 tablespoons oil over high heat and fry the burgers for 2 minutes on each side. Serve with hot burger bun, ruccola, shredded parmesan cheese and sauce.');
insert into T_RECIPE(REC_NAME, REC_CONTENT) values
('Zucchini Soup', 'Cut all the ingredients into small pieces. In a large skillet, heat 4 tablespoon of olive oil and add garlic and oignion. Stir fry during 2 minutes. Add zucchini and potatoes. Cook for an additional 5 minutes. Transfer all the ingredients to a large pan. Add broth cube and 1 liter of water. Cook for an ditional 20 minutes. Mix until smooth. Serve with croutons.');
insert into T_RECIPE(REC_NAME, REC_CONTENT) values
('Homemade Fish Sticks', 'In three different plates, prepare the flour, one beaten egg and breading. Cut fish into pieces and coat it in the flour, egg and breading. In a large pan, put sunflower oil and fry the fish until brown. Serve with mashed potatoes.');
insert into T_RECIPE(REC_NAME, REC_CONTENT) values
('Ginger Orange Salmon', 'Squeeze the orange juice, shred the ginger and garlic. Mix the ingredients together and add salmon. Marinate for at least 1 hour. Once ready, cook it for 5 minutes on the side with the skin. Preheat the owen to 180 degrees. Cook the fish for remining 15 minutes in the owen. Serve with quinoa or rice and vegetables of your choice.');

insert into T_INGREDIENT(ING_NAME, REC_ID) values 
('Chicken', 1);
insert into T_INGREDIENT(ING_NAME, REC_ID) values 
('Soy sauce', 1);
insert into T_INGREDIENT(ING_NAME, REC_ID) values 
('Cod', 4);
insert into T_INGREDIENT(ING_NAME, REC_ID) values 
('Ginger', 1);
insert into T_INGREDIENT(ING_NAME, REC_ID) values 
('Ground beef', 2);
insert into T_INGREDIENT(ING_NAME, REC_ID) values 
('Salmon', 5);
insert into T_INGREDIENT(ING_NAME, REC_ID) values 
('Ginger', 5);
insert into T_INGREDIENT(ING_NAME, REC_ID) values 
('Zucchini', 3);
insert into T_INGREDIENT(ING_NAME, REC_ID) values 
('Oignion', 3);
insert into T_INGREDIENT(ING_NAME, REC_ID) values 
('Green oignion', 1);
insert into T_INGREDIENT(ING_NAME, REC_ID) values 
('Burger bun', 2);
insert into T_INGREDIENT(ING_NAME, REC_ID) values
('Bread crumbs', 4);
insert into T_INGREDIENT(ING_NAME, REC_ID) values 
('Bouillion cube', 3);
insert into T_INGREDIENT(ING_NAME, REC_ID) values 
('Lemon', 1);
insert into T_INGREDIENT(ING_NAME, REC_ID) values 
('Orange', 5);
insert into T_INGREDIENT(ING_NAME, REC_ID) values 
('Greek yogurt', 2);
insert into T_INGREDIENT(ING_NAME, REC_ID) values 
('Mayonnaise', 2);
insert into T_INGREDIENT(ING_NAME, REC_ID) values 
('Garlic', 2);
insert into T_INGREDIENT(ING_NAME, REC_ID) values 
('Garlic', 5);
insert into T_INGREDIENT(ING_NAME, REC_ID) values 
('Garlic', 3);

insert into T_USER(USR_LOGIN, USR_EMAIL, USR_PWD) values
('admin', '53089@etu.he2b.be', 'secret');
insert into T_USER(USR_LOGIN, USR_EMAIL, USR_PWD) values
('webuser', 'akosna@hotmail.com', 'password');

insert into T_MENU(REC_ID) values 
(1);
insert into T_MENU(REC_ID) values 
(2); 
insert into T_MENU(REC_ID) values 
(3); 
insert into T_MENU(REC_ID) values 
(4);