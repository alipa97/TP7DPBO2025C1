-- CREATE DATABASE db_skincare;
USE db_skincare;

CREATE TABLE brands (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(250) NOT NULL,
    country VARCHAR(250) NOT NULL
);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(250) NOT NULL
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    brand_id INT NOT NULL,
    category_id INT NOT NULL,
    price INT NOT NULL DEFAULT 0,
    description TEXT,
    FOREIGN KEY (brand_id) REFERENCES brands(id) ON DELETE CASCADE,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE
);

INSERT INTO brands (name, country) VALUES
('The Ordinary', 'Canada'),
('Pyungkang Yul', 'South Korea'),
('Somethinc', 'Indonesia');

INSERT INTO categories (name) VALUES
('Cleanser'),
('Toner'),
('Serum'),
('Moisturizer'),
('Sunscreen');

INSERT INTO products (name, brand_id, category_id, price, description) VALUES
('Niacinamide 10% + Zinc 1%', 1, 3, 120000, 'Membantu mengontrol minyak dan mencerahkan kulit.'),
('Essence Toner', 2, 2, 95000, 'Essence toner ringan dengan formula minimalis, membantu menenangkan dan melembapkan kulit.'),
('C-Riously Bright Serum', 3, 3, 150000, 'Serum vitamin C untuk mencerahkan wajah.');