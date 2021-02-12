-- Connect to ashland
USE ashland;
-- Create temporary table if not exisits
CREATE TABLE IF NOT EXISTS `new_player_tmp` (
  `pla_lname` VARCHAR(25) DEFAULT NULL,
  `pla_fname` VARCHAR(25) DEFAULT NULL,
  `pla_phone` VARCHAR(12) DEFAULT NULL,
  `pla_par_lname` VARCHAR(25) DEFAULT NULL,
  `pla_par_fname` VARCHAR(25) DEFAULT NULL,
  `pla_add` VARCHAR(50) DEFAULT NULL,
  `pla_city` VARCHAR(50) DEFAULT NULL,
  `pla_state` CHAR(2) DEFAULT NULL,
  `pla_zip` VARCHAR(5) DEFAULT NULL,
  `pla_bdate` DATE DEFAULT NULL,
  `date_added` DATE NOT NULL
) ENGINE=InnoDB CHARSET=latin1 COLLATE latin1_swedish_ci;
