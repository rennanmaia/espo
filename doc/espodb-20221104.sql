CREATE DATABASE 'espodb';

USE 'espodb';

CREATE TABLE IF NOT EXISTS `espodb`.`espaco` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(200) NOT NULL,
  `obs` VARCHAR(250) NULL DEFAULT NULL,
  `latitude` FLOAT(10,6) NULL DEFAULT NULL,
  `longitude` FLOAT(10,6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


INSERT INTO `espaco` (`id`, `descricao`, `obs`, `latitude`, `longitude`) VALUES (NULL, 'UFOPA 001', 'Espaço em frente à UFOPA Campus Tapajós', '-2.417675', '-54.740101');

INSERT INTO `espaco` (`id`, `descricao`, `obs`, `latitude`, `longitude`) VALUES (NULL, 'UFOPA 002', 'Espaço em frente à UFOPA Campus Tapajós', '-2.417675', '-54.740101');

INSERT INTO `espaco` (`id`, `descricao`, `obs`, `latitude`, `longitude`) VALUES (NULL, 'Fernando Guilhon 001', 'Espaço na Av. Fernando Guilhon em frente ao Atacadão', '', '');

INSERT INTO `espaco` (`id`, `descricao`, `obs`, `latitude`, `longitude`) VALUES (NULL, 'Rio Tapajós Shopping 001', 'Espaço na Av. Fernando Guilhon no estacionamento do Rio Tapajós Shopping', '', '');
