CREATE DATABASE makeups;
USE makeups;

CREATE TABLE category (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT
);

CREATE TABLE brand (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    country VARCHAR(50)
);

CREATE TABLE product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL DEFAULT 0,
    category_id INT NOT NULL,
    brand_id INT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES category(id) ON DELETE CASCADE,
    FOREIGN KEY (brand_id) REFERENCES brand(id) ON DELETE CASCADE
);

INSERT INTO category (name, description) VALUES
('Lipstik', 'Produk pewarna bibir'),
('Foundation', 'Produk dasar makeup wajah'),
('Eyeshadow', 'Produk pewarna mata'),
('Blush On', 'Produk pewarna pipi');

INSERT INTO brand (name, country) VALUES
('Wardah', 'Indonesia'),
('Maybelline', 'USA'),
('L\Oreal', 'France'),
('Pixy', 'Indonesia');

INSERT INTO product (name, price, stock, category_id, brand_id) VALUES
('Wardah Matte Lipstick', 45000, 50, 1, 1),
('Maybelline Fit Me Foundation', 179000, 30, 2, 2),
('L\Oreal Eyeshadow Palette', 299000, 20, 3, 3),
('Pixy Blush On', 35000, 40, 4, 4);