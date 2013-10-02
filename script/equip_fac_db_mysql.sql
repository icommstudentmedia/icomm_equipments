SELECT 'RESTORING' AS 'USER TABLE';
DROP TABLE IF EXISTS system_user;
CREATE TABLE system_user
( system_user_id		INT UNSIGNED 	PRIMARY KEY AUTO_INCREMENT
, system_user_username	VARCHAR(20) 	NOT NULL
, system_user_password 	VARCHAR(100)	NOT NULL
, first_name			VARCHAR(20)		
, last_name				VARCHAR(30)
, i_number				VARCHAR(9)
, school_email			VARCHAR(40)
, created_by			INT UNSIGNED	NOT NULL
, creation_date			DATETIME		NOT NULL
, last_updated_by		INT UNSIGNED	NOT NULL
, last_update_date		DATETIME		NOT NULL
);