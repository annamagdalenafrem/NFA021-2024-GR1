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
## Table: listing
CREATE TABLE User (
    user_id INT not null auto_increment ,
    first_name VARCHAR(15) not null,
    last_name VARCHAR(30) not null,
    email VARCHAR(50),
    user_password VARCHAR(20) not null,
    phone_number VARCHAR(8) not null,
    user_address VARCHAR(255),
    username VARCHAR(25) not null unique,
    is_admin BOOLEAN,
    creation_date DATE not null,
    primary key (user_id),


);

CREATE TABLE Campsite (
   campsite_id INT not null auto_increment,
   campsite_name VARCHAR(255),
   capacity INT,
   category_id int not null,
   primary key(campsite_id),
   foreign key(category_id) references(Category),
   ON UPDATE CASCADE,
   ON DELETE SET NULL,
);

CREATE TABLE Category(
category_id INT not null auto_increment,
category_name VARCHAR(255) not null,
primary key(category_id),
);

CREATE TABLE Location (
    location_id INT not null auto_increment,
    city VARCHAR(20) not null,
    district VARCHAR(60) not null,
    gouvernorate VARCHAR(60) not null,
    laltitude float not null,
    longitude float not null,
    campsite_id int not null,
    primary key(location_id),
    foreign key(campsite_id) references(Campsite), 
    ON UPDATE CASCADE,
    ON DELETE CASCADE,
);

CREATE TABLE Review (
    review_id INT not null auto_increment,
    rating INT,
    review_text VARCHAR(),
    date_posted DATE not null,
    campsite_id int not null,
    primary key(review_id),
    foreign key(campsite_id) references(Campsite),
    ON UPDATE CASCADE,
);



# Meet Link
https://teams.live.com/meet/9468647618631?p=ZcQYDMTAyJeszmW3 
