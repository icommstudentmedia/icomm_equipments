-- I~Comm - Equipments and Facilities
-- Description:
-- 		Script to populate the database
-- 		Can be used to reset the database also
-- Author: 		
--		Isaac Andrade (isaac.nic@gmail.com)

-- Log the scritp output
TEE /Applications/MAMP/htdocs/icomm-bootstrap/icomm_equipments/script/equip_facilities_log.txt

-- --------------------------------------------------------------------
-- CREATEING / RESETING THE TABLESe
-- --------------------------------------------------------------------

SELECT 'RESTORING' AS 'SYSTEM_ROLE TABLE';

SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS system_role;

CREATE TABLE system_role
( role_id				INT UNSIGNED 	PRIMARY KEY AUTO_INCREMENT
, role_name				VARCHAR(20)		NOT NULL
, creation_date			DATETIME		NOT NULL
, last_update_date		DATETIME		NOT NULL
);

SET FOREIGN_KEY_CHECKS=1;
-- --------------------------------------------------------------------

SELECT 'RESTORING' AS 'SYSTEM_USER TABLE';

DROP TABLE IF EXISTS system_user;

CREATE TABLE system_user
( system_user_id			INT UNSIGNED 	NOT NULL AUTO_INCREMENT
, system_user_username		VARCHAR(20) 	NOT NULL
, system_user_password 		VARCHAR(100)	NOT NULL
, role_id 					INT UNSIGNED	
, first_name				VARCHAR(20)		
, last_name					VARCHAR(30)
, i_number					VARCHAR(9)
, school_email				VARCHAR(40)
, creation_date				DATETIME		NOT NULL
, last_update_date			DATETIME		NOT NULL
, KEY system_user_fk1 (role_id)
, PRIMARY KEY (system_user_id)
, CONSTRAINT system_user_fk1 FOREIGN KEY (role_id) REFERENCES system_role (role_id)
) ENGINE=InnoDB;

-- --------------------------------------------------------------------
-- (RE)POPULATING THE TABLES
-- --------------------------------------------------------------------

SELECT 'POPULATING' AS 'SYSTEM_ROLE TABLE';

INSERT INTO system_role
VALUES (NULL, 'administrator', SYSDATE(), SYSDATE());

INSERT INTO system_role
VALUES (NULL, 'employee', SYSDATE(), SYSDATE());

INSERT INTO system_role
VALUES (NULL, 'student', SYSDATE(), SYSDATE());

-- --------------------------------------------------------------------

SELECT 'POPULATING' AS 'SYSTEM_USER TABLE';

INSERT INTO system_user
( system_user_username
, system_user_password
, role_id
, first_name
, last_name
, i_number
, school_email
, creation_date
, last_update_date
)
VALUES
( 'andradei'
, '123'
, (SELECT role_id FROM system_role WHERE role_name = 'administrator')
, 'Isaac'
, 'Andrade'
, '359817251'
, 'and12018@byui.edu'
, SYSDATE()
, SYSDATE()
);

INSERT INTO system_user
( system_user_username
, system_user_password
, role_id
, first_name
, last_name
, i_number
, school_email
, creation_date
, last_update_date
)
VALUES
( 'gbentim'
, '123'
, (SELECT role_id FROM system_role WHERE role_name = 'administrator')
, 'Isaac'
, 'Andrade'
, '359817251'
, 'and12018@byui.edu'
, SYSDATE()
, SYSDATE()
);

INSERT INTO system_user
( system_user_username
, system_user_password
, role_id
, first_name
, last_name
, i_number
, school_email
, creation_date
, last_update_date
)
VALUES
( 'fitzr'
, '123'
, (SELECT role_id FROM system_role WHERE role_name = 'administrator')
, 'Isaac'
, 'Andrade'
, '359817251'
, 'and12018@byui.edu'
, SYSDATE()
, SYSDATE()
);

-- Close logging of script output
NOTEE