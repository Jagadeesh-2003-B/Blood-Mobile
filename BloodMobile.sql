-- Create a database
CREATE DATABASE IF NOT EXISTS web85sit_bloodmobile;

-- Use the created database
USE web85sit_bloodmobile;

-- Create a table to store donor information
CREATE TABLE IF NOT EXISTS donors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    blood_group VARCHAR(10) NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(10) NOT NULL,
    locality VARCHAR(255) NOT NULL,
    contact_no VARCHAR(15) NOT NULL,
    mail_id VARCHAR(255) NOT NULL
);
