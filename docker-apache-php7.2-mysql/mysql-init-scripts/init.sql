USE devbuild;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL
);

INSERT INTO usuarios (nome) VALUES ('Evandro Gomes'), ('Romilda Vane') , ('Maica Zilda'), ('Kyo')
('Chris Red'), ('Van Silva');
