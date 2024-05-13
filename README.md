# Project Name
Camping Website

# Project Team Members
* ABOU HAIDAR Elie Salim
* EL NGHAYWE Miled Miled
* FREM Anna - Magdalena Michel
* KARAM Charbel Jihad 

# Project Descripton
This project showcases a camping website built using HTML, CSS, JAVASCRIPT, PHP and SQL. 
Where you can find, review, explore and book an exciting camping experience. 
Remember, every adventure begins with a single click!  


# Database Structure
User (User-id, first_name, Last_name, email, password, phone_number, address, username, is_admin, creation_date)

Reservation (reservation_id, total_price, from_date, to_date, #user-id, #Campsite-id)

Campsite (campsite_id, name, capacity, #category_id, #Location_id)

Category (Category_id, name)

Location (Location_id, city, district, governorate, laltitude, longitude)

Price category (price_category_id, weekday_price, weekend_price, highseason_price)

Review (review_id, rating, review text, date_posted, #campsite_id)

Campsite_Price (#campsite_id, #price_category_id, price)

## Table: listing
create user 'anna magadalena'@'localhost' identified by 'password1';
grant select, update, delete, insert on td1.* to 'anna magadalena'@'localhost';

create user 'elie'@'localhost' identified by 'password2';
grant select, update, delete, insert on td1.* to 'elie'@'localhost';

create user 'miled'@'localhost' identified by 'password3';
grant select, update, delete, insert on td1.* to 'miled'@'localhost';

create user 'charbel'@'localhost' identified by 'password4';
grant select, update, delete, insert on td1.* to 'charbel'@'localhost';

flush privileges;

create database campingsite;

use campingsite;


create table `user` (
    `user_id` int not null auto_increment,
    `first_name` varchar(15) not null,
    `last_name` varchar(30) not null,
    `email` varchar(50) not null,
    `user_password` varchar(20) not null,
    `phone_number` varchar(15) not null,
    `user_address` varchar(255),
    `username` varchar(25) not null unique,
    `is_admin` boolean,
    `creation_date` date not null,
    primary key (`user_id`)
);

create table `category`(
   `category_id` int not null auto_increment,
   `category_name` varchar(255) not null,
   primary key(`category_id`)
);

create table `campsite` (
   `campsite_id` int not null auto_increment,
   `campsite_name` varchar(255),
   `capacity` int,
   `category_id` int not null,
   primary key(`campsite_id`)
);

alter table `campsite` 
    add constraint `fk_category` foreign key (`category_id`) references `category`(`category_id`);

create table `location` (
    `location_id` int not null auto_increment,
    `city` varchar(20) not null,
    `district` varchar(60) not null,
    `gouvernorate` varchar(60) not null,
    `latitude` float not null,
    `longitude` float not null,
    `campsite_id` int not null,
    primary key(`location_id`)
);

alter table `location`
    add constraint `fk_campsite`foreign key (`campsite_id`) references `campsite`(`campsite_id`);

    create table `review` (
    `review_id` int not null auto_increment,
    `rating` int,
    `review_text` varchar(255),
    `date_posted` date not null,
    `campsite_id` int not null,
    `user_id` int not null,
    primary key(`review_id`)
);

alter table `review`
    add constraint `fk_campsite_review`foreign key (`campsite_id`) references `campsite`(`campsite_id`),
    add constraint `fk_user_review` foreign key (`user_id`) references `user`(`user_id`) ;

create table `reservation` (
    `reservation_id` int not null auto_increment,
    `total_price` decimal(10, 2) not null,
    `from_date` date not null,
    `to_date` date not null,
    `user_id` int not null,
    `campsite_id` int not null,
    primary key(`reservation_id`)
);

alter table `reservation`
    add constraint `fk_user_reservation`foreign key (`user_id`) references `user`(`user_id`) ,
    add constraint `fk_campsite_reservation`foreign key (`campsite_id`) references `campsite`(`campsite_id`);

create table `price_category` (
    `price_category_id` int not null auto_increment,
    `weekday_price` int not null,
    `weekend_price` int not null,
    `highseason_price` int not null,
    primary key(`price_category_id`)
);

create table `campsite_price`(
    `campsite_id` int not null,
    `price_category_id` int not null,
    `price` int,
    primary key(`campsite_id`, `price_category_id`)
);

alter table `campsite_price`
    add constraint `fk_campsite_price` foreign key (`campsite_id`) references `campsite`(`campsite_id`) ,
    add constraint `fk_price`foreign key (`price_category_id`) references `price_category`(`price_category_id`);



# Meet Link
https://teams.live.com/meet/9468647618631?p=ZcQYDMTAyJeszmW3 
