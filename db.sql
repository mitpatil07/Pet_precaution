-- Create database
CREATE DATABASE pet_precaution;

-- Use the database
USE pet_precaution;

-- Create table to store enquiries
CREATE TABLE enquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    pet_breed VARCHAR(100) NOT NULL,
    what_we_do TEXT NOT NULL,
    suggestion TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);