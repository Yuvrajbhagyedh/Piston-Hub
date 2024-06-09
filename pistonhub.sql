-- Drop existing database if it exists
DROP DATABASE IF EXISTS bike_shop;

-- Create a new database
CREATE DATABASE bike_shop;

-- Use the new database
USE bike_shop;

-- Create categories table
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT
);

-- Create products table
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255),
    stock INT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

-- Create customers table
CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    address TEXT
);

-- Create orders table
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    order_date DATETIME NOT NULL,
    total DECIMAL(10, 2) NOT NULL,
    status VARCHAR(50) NOT NULL,
    FOREIGN KEY (customer_id) REFERENCES customers(id)
);

-- Create order_items table
CREATE TABLE order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Create reviews table
CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    customer_id INT,
    rating INT NOT NULL,
    comment TEXT,
    review_date DATETIME NOT NULL,
    FOREIGN KEY (product_id) REFERENCES products(id),
    FOREIGN KEY (customer_id) REFERENCES customers(id)
);

-- Insert sample data into categories
INSERT INTO categories (name, description) VALUES
('Helmets', 'Safety helmets for biking.'),
('Gloves', 'Comfortable biking gloves.'),
('Jackets', 'Protective biking jackets.'),
('Lights', 'Bike lights and accessories.'),
('Locks', 'Bike locks and security.'),
('Tools', 'Bike repair tools and kits.');

-- Insert sample data into products
INSERT INTO products (category_id, name, description, price, image, stock) VALUES
(1, 'Basic Helmet', 'A basic safety helmet.', 50.00, 'images/helmet.jpg', 100),
(2, 'Winter Gloves', 'Warm gloves for winter biking.', 25.00, 'images/gloves.jpg', 200),
(3, 'Riding Jacket', 'A durable riding jacket.', 100.00, 'images/jacket.jpg', 50),
(4, 'Front Light', 'A bright front light for night riding.', 30.00, 'images/light.jpg', 150),
(5, 'Bike Lock', 'A strong bike lock.', 40.00, 'images/lock.jpg', 80),
(6, 'Repair Kit', 'A complete bike repair kit.', 20.00, 'images/tools.jpg', 120);

-- Insert sample data into customers
INSERT INTO customers (first_name, last_name, email, password, phone, address) VALUES
('John', 'Doe', 'john@example.com', 'hashed_password', '123-456-7890', '123 Main St, Anytown, USA'),
('Jane', 'Smith', 'jane@example.com', 'hashed_password', '098-765-4321', '456 Elm St, Othertown, USA');

-- Insert sample data into orders
INSERT INTO orders (customer_id, order_date, total, status) VALUES
(1, '2024-01-01 10:00:00', 75.00, 'Pending'),
(2, '2024-01-02 11:00:00', 140.00, 'Shipped');

-- Insert sample data into order_items
INSERT INTO order_items (order_id, product_id, quantity, price) VALUES
(1, 1, 1, 50.00),
(1, 2, 1, 25.00),
(2, 3, 1, 100.00),
(2, 4, 2, 20.00);

-- Insert sample data into reviews
INSERT INTO reviews (product_id, customer_id, rating, comment, review_date) VALUES
(1, 1, 5, 'Great helmet!', '2024-01-03 12:00:00'),
(2, 2, 4, 'Good gloves, but a bit tight.', '2024-01-04 13:00:00');
