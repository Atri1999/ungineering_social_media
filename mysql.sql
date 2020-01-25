CREATE DATABASE social_media;

USE social_media;

CREATE TABLE users(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    college VARCHAR(255),
    phone_no VARCHAR(255),
    PRIMARY KEY(id)
    );
    

 
CREATE TABLE statuses(
    id INT NOT NULL AUTO_INCREMENT,
    date_ DATE NOT NULL,
    time TIME NOT NULL,
    status VARCHAR(1000) NOT NULL,
    user_id INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(user_id) REFERENCES users(id)
); 
DESC users;
DESC statuses;
