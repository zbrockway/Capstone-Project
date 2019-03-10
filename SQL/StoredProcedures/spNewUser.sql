DELIMITER $$
DROP PROCEDURE IF EXISTS spNewUser$$

CREATE PROCEDURE spGETPOSTLIST()
(
    @email varchar(255),
    @name varchar(255),
    @password varchar(255)
)
BEGIN
    INSERT INTO tblUsers (email, name, password)
    VALUES (@email, @name, @password);
END