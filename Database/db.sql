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

CREATE TABLE review (
    review_id INT not null auto_increment,
    rating INT,
    review_text VARCHAR(255),
    date_posted DATE not null,
    campsite_id int not null,
    user_id INT not null,
    primary key(review_id),
    foreign key(campsite_id) references Campsite,
    ON UPDATE CASCADE,
    ON DELETE SET NULL,
    foreign key(user_id) references User,
    ON UPDATE CASCADE,
    ON DELETE SET NULL,
);

CREATE TABLE reservation (
    reservation_id INT not null auto_increment,
    total_price DECIMAL(10, 2) not null,
    From_date DATE not null,
    To_date DATE not null,
    user_id int not null,
    campsite_id int not null,
    primary key(reservation_id),
    foreign key(user_id) references (User),
    ON UPDATE CASCADE,
    ON DELETE SET NULL,
    foreign key(campsite_id) references (Campsite),
    ON UPDATE CASCADE,
    ON DELETE SET NULL
);

CREATE TABLE price_category (
    price_category_id INT not null auto_increment,
    weekday_price INT not null,
    weekend_price INT not null,
    highseason_price INT not null,
    primary key(price_category_id)
);

CREATE TABLE campsite_price_category(
    campsite_id int not null,
    price_category_id int not null,
    price INT,
    primary key(campsite_id, price_category_id),
    foreign key(campsite_id) references (Campsite),
    ON UPDATE CASCADE,
    ON DELETE SET NULL,
    foreign key(price_category_id) references (Price_category),
    ON UPDATE CASCADE,
    ON DELETE SET NULL
);
