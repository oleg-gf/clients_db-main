CREATE TABLE `clientsdb`.`clients` ( `ID` INT(3) NOT NULL AUTO_INCREMENT , `name` VARCHAR(32) CHARACTER SET UTF8MB4 COLLATE UTF8MB4_0900_ai_ci NOT NULL , `lastname` VARCHAR(32) CHARACTER SET UTF8MB4 COLLATE UTF8MB4_0900_ai_ci NOT NULL , `phone` INT(3) NOT NULL , `comment` LONGTEXT CHARACTER SET UTF8MB4 COLLATE UTF8MB4_0900_ai_ci NOT NULL , `date` DATE NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;