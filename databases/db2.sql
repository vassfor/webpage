
CREATE TABLE `users` (
    user_id INT(10) NOT NULL AUTO_INCREMENT,
    user_firstname VARCHAR(256) NOT NULL,
    user_lastname VARCHAR(256) NOT NULL,
    user_email VARCHAR(256) NOT NULL,
    user_uid VARCHAR(256) NOT NULL,
    user_pwd VARCHAR(256) NOT NULL,
    PRIMARY KEY(user_id)
);