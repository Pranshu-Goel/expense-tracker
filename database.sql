CREATE DATABASE expense_tracker;

USE expense_tracker;

CREATE TABLE expenses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    amount DECIMAL(10,2),
    category VARCHAR(50),
    description VARCHAR(100),
    expense_date DATE
);