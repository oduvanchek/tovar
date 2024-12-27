
CREATE DATABASE IF NOT EXISTS inventory_management;
USE inventory_management;


CREATE TABLE products (
                          id INT AUTO_INCREMENT PRIMARY KEY,
                          name VARCHAR(255) NOT NULL,
                          price DECIMAL(10, 2) NOT NULL,
                          sku VARCHAR(255) NOT NULL UNIQUE
);


CREATE TABLE stock (
                       id INT AUTO_INCREMENT PRIMARY KEY,
                       product_id INT NOT NULL,
                       quantity INT NOT NULL,
                       timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
                       FOREIGN KEY (product_id) REFERENCES products(id)
);