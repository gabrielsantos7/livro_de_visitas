# SQL para a criação da tabela no banco de dados
CREATE TABLE visitors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    date_time DATETIME NOT NULL,
    rating INT NOT NULL
);
