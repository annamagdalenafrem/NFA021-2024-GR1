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
CREATE TABLE user (
    user_id INT not null auto_increment,
    first_name VARCHAR(15) not null,
    last_name VARCHAR(30) not null,
    email VARCHAR(50),
    user_password VARCHAR(20) not null,
    phone_number VARCHAR(15) not null,
    user_address VARCHAR(255),
    username VARCHAR(25) not null unique,
    is_admin BOOLEAN,
    creation_date DATE not null,
    primary key (user_id)
);

CREATE TABLE campsite (
   campsite_id INT not null auto_increment,
   campsite_name VARCHAR(255),
   capacity INT,
   category_id int not null,
   primary key(campsite_id),
   foreign key(category_id) references (Category),
    ON UPDATE CASCADE,
    ON DELETE SET NULL
);

CREATE TABLE category(
   category_id INT not null auto_increment,
   category_name VARCHAR(255) not null,
   primary key(category_id)
);

CREATE TABLE location (
    location_id INT not null auto_increment,
    city VARCHAR(20) not null,
    district VARCHAR(60) not null,
    gouvernorate VARCHAR(60) not null,
    latitude FLOAT not null,
    longitude FLOAT not null,
    campsite_id INT not null,
    primary key(location_id),
    foreign key(campsite_id) references (Campsite),
    ON UPDATE CASCADE,
    ON DELETE SET NULL,
);



# Meet Link
https://teams.live.com/meet/9468647618631?p=ZcQYDMTAyJeszmW3 
