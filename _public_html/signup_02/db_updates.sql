-- DELETE FROM `new_player_tmp` WHERE 1
-- TEST DATA
INSERT INTO `new_player_tmp`(
    `pla_lname`,
    `pla_fname`,
    `pla_phone`,
    `pla_par_lname`,
    `pla_par_fname`,
    `pla_add`,
    `pla_city`,
    `pla_state`,
    `pla_zip`,
    `pla_bdate`,
    `date_added`
)
VALUES(
  'Wiggy',
  'Ziggy',
  '321-555-6789',
  'McFarley',
  'Marley',
  '12345 Main Street SW',
  'AnyTown',
  'ST',
  '12345-6789',
  '2016-05-26',
  '2021-03-07'
),(
  'McFarley',
  'Marley',
  '123-555-9876',
  'Wiggy',
  'Ziggy',
  '12345 Main Street SW',
  'AnyTown',
  'ST',
  '12345-6789',
  '2014-12-05',
  '2021-03-07'
);

-- ALTER pla_zip -> zip+4
ALTER TABLE
    `new_player_tmp` CHANGE `pla_zip` `pla_zip` VARCHAR(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;

-- ADD CURRENT TIMESTAMP AUTO FIELD
ALTER TABLE
    `new_player_tmp` ADD `timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `date_added`;


-- DATE ADDED TRIGGER
DELIMITER $$

CREATE TRIGGER after_new_player_tmp_insert
    AFTER INSERT
    ON new_player_tmp FOR EACH ROW
BEGIN
    IF NEW.`date_added` IS NULL THEN
        INSERT INTO new_player_tmp(date_added)
        VALUES(CURRENT_DATE);
END IF;
END$$

DELIMITER ;
