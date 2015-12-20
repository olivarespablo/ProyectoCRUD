-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Equipo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Equipo` (
  `idEquipo` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(200) NULL,
  `division` VARCHAR(1) NULL,
  `fechaCreacion` DATETIME NULL,
  PRIMARY KEY (`idEquipo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Jugador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Jugador` (
  `idJugador` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `apellido` VARCHAR(45) NULL,
  `numeroCasaquilla` VARCHAR(45) NULL,
  `Equipo_idEquipo` INT NOT NULL,
  PRIMARY KEY (`idJugador`),
  CONSTRAINT `fk_Jugador_Equipo`
    FOREIGN KEY (`Equipo_idEquipo`)
    REFERENCES `mydb`.`Equipo` (`idEquipo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE UNIQUE INDEX `numeroCasaquilla_UNIQUE` ON `mydb`.`Jugador` (`numeroCasaquilla` ASC);

CREATE INDEX `fk_Jugador_Equipo_idx` ON `mydb`.`Jugador` (`Equipo_idEquipo` ASC);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
