CREATE TABLE IF NOT EXISTS imagens (
  id INT(11) NOT NULL AUTO_INCREMENT,
  espaco_id INT(11) NOT NULL,
  file_name VARCHAR(255) NOT NULL,
  uploaded_on DATETIME NOT NULL,
  status ENUM('0', '1') NOT NULL DEFAULT '1',
  PRIMARY KEY (id),
  INDEX fk_imagens_espaco_idx (`espaco_id` ASC),
    FOREIGN KEY (`espaco_id`)
    REFERENCES `espodb`.`espaco` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;