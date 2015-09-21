CREATE DATABASE elvis_store;

USE elvis_store;

CREATE TABLE email_list
   (first_name VARCHAR(20),
    last_name VARCHAR(20),
    email VARCHAR(60)
    );

DELETE FROM email_list WHERE email = 'pr@honey-doit.com';
