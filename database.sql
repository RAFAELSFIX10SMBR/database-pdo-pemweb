-- Sesuai modul halaman 7: Perancangan Database

CREATE DATABASE db_login;

USE db_login;

CREATE TABLE users (
    id       INT AUTO_INCREMENT PRIMARY KEY,
    name     VARCHAR(100) NOT NULL,
    email    VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    bio      TEXT
);
