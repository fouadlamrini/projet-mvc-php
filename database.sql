CREATE TABLE users (
    id INT AUTO_INCREMENT,
    username VARCHAR(50),
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    role ENUM('client', 'admin') DEFAULT 'client',
    PRIMARY KEY (id)
);
