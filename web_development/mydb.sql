CREATE DATABASE kalyan;
use kalyan;

CREATE TABLE users (id INT AUTO_INCREMENT PRIMARY KEY, Aadhaar_no VARCHAR(12) NOT NULL,F_name VARCHAR(50) NOT NULL,L_name VARCHAR(50) NOT NULL, P_no VARCHAR(15) NOT NULL, DOB DATE NOT NULL,vaccine_type VARCHAR(50) NOT NULL,dose_no INT NOT NULL,email VARCHAR(100) NOT NULL);

CREATE TABLE updates (id INT AUTO_INCREMENT PRIMARY KEY,F_name VARCHAR(50) NOT NULL,L_name VARCHAR(50) NOT NULL,email VARCHAR(100) NOT NULL,P_no VARCHAR(15) NOT NULL,Aadhaar_no VARCHAR(12) NOT NULL);
CREATE TABLE register (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    dt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


