DELIMITER $$

USE `basdat`$$

DROP TRIGGER /*!50032 IF EXISTS */ `hapusdetailbeli`$$

CREATE
    /*!50017 DEFINER = 'root'@'localhost' */
    TRIGGER `hapusdetailbeli` BEFORE DELETE ON `pembeli` 
    FOR EACH ROW BEGIN
    DELETE FROM detailbeli WHERE idpembeli = old.idpembeli;

    END;
$$

DELIMITER ;