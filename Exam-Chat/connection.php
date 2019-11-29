<?php
/**
 * @author Konstantin Bogdanoski (konstantin.b@live.com)
 */
$host = "127.0.0.1:3306";
$dbname = "chat";
$username = "root";
$password = "password";
$conn = null;
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = '
-- -----------------------------------------------------
-- Table chat.`channel`
-- -----------------------------------------------------
DROP TABLE IF EXISTS channel ;

CREATE TABLE IF NOT EXISTS channel (
  channel_id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(128) NOT NULL,
  description VARCHAR(255) NOT NULL,
  PRIMARY KEY (channel_id),
  INDEX cid_idx (channel_id ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table chat.`message`
-- -----------------------------------------------------
DROP TABLE IF EXISTS message ;

CREATE TABLE IF NOT EXISTS message (
  message_id INT NOT NULL AUTO_INCREMENT,
  message_text VARCHAR(255) NOT NULL,
  sender_username VARCHAR(45) NOT NULL,
  sender_email VARCHAR(45) NOT NULL,
  channel_id INT NOT NULL,
  is_read TINYINT(1) NULL DEFAULT 0,
  time_sent DATETIME NOT NULL,
  PRIMARY KEY (message_id),
  INDEX mid_idx (message_id ASC),
  CONSTRAINT channel_id
    FOREIGN KEY (channel_id)
    REFERENCES channel (channel_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
';
    $q = $conn->query($sql);
    //$q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}