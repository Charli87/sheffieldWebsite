DROP TABLE IF EXISTS login;
DROP TABLE IF EXISTS venues;
DROP TABLE IF EXISTS reviews;

CREATE TABLE login(
    id INT(7) NOT NULL auto_increment, 
    username VARCHAR(30) NOT NULL,
    password VARCHAR(8) NOT NULL,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    dateOfBirth date NOT NULL,
    city VARCHAR(30) NOT NULL,
    type INT(1) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE venues(
    venueID INT(7) unsigned NOT NULL auto_increment, 
    venueName varchar(40) NOT NULL,
    city VARCHAR(25) NOT NULL,
    slogan VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    address VARCHAR(255) NOT NULL,
    postcode VARCHAR(7) NOT NULL,
    telephone VARCHAR(25) NOT NULL,
    googleMapsCode TEXT NOT NULL,
    images TEXT NOT NULL,
    userRating INT(1) NOT NULL,
    venueType VARCHAR(25) NOT NULL,
    PRIMARY KEY (venueID)
);

CREATE TABLE reviews(
    reviewID INT(7) unsigned NOT NULL auto_increment, 
    id VARCHAR(7) NOT NULL,
    venueID VARCHAR(7) NOT NULL,
    review TEXT NOT NULL,
    rating INT(1) NOT NULL,
    PRIMARY KEY (reviewID)
);