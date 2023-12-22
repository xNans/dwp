

DROP DATABASE IF EXISTS blomsterbiksen;
CREATE DATABASE blomsterbiksen;

USE blomsterbiksen;

CREATE TABLE postal_code
(
    PostalCodeID INT(50) NOT NULL PRIMARY KEY,
    City VARCHAR(100)
)   Engine=InnoDB;

CREATE TABLE adress
(
    AdressID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    StreetName VARCHAR(100),
    HouseNumber VARCHAR(50),
    PostalCodeID INT,
    FOREIGN KEY (PostalCodeID) REFERENCES PostalCode (PostalCodeID)
)   Engine=InnoDB;

CREATE TABLE product
(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    position INT(3),
    visible INT(1),
    product_name VARCHAR(255),
    price DECIMAL(7,2)
)   Engine=InnoDB;

CREATE TABLE pages
(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    page_name VARCHAR(100),
    position INT(3),
    visible INT(1),
    content TEXT,
    product_id INT,
    FOREIGN KEY (product_id) REFERENCES product (id),
)   Engine=InnoDB;

CREATE TABLE contact 
(
    ContactID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Adress VARCHAR (255),
    Mobile VARCHAR (50),
    Email VARCHAR (255),
    OpeningDay VARCHAR (100),
    OpeningTime VARCHAR(100)

)   Engine=InnoDB;




