CREATE DATABASE wearhouse;

CREATE TABLE MsUser (
    UserID VARCHAR(225) PRIMARY key NOT NULL,
    userName VARCHAR(225) NOT NULL,
    userEmail VARCHAR(225) NOT NULL,
    userPassword VARCHAR(225) NOT NULL
)

CREATE TABLE MsCategory (
    CategoryID VARCHAR(225) PRIMARY KEY,
    UserID VARCHAR(225) NOT NULL, 
    Category VARCHAR(225) NOT NULL,
    categorydate DATETIME
)

ALTER TABLE MsCategory
ADD CONSTRAINT FK_Category_User FOREIGN KEY (UserID) REFERENCES MsUser(UserID);