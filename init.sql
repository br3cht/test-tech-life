CREATE TABLE IF NOT EXISTS rastreamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    placa_veiculo VARCHAR(20) NOT NULL,
    nome_funcionario VARCHAR(100) NOT NULL,
    data_ocorrencia DATETIME NOT NULL,
    velocidade_maxima INT NOT NULL,
    velocidade_registrada INT NOT NULL,
    latitude DECIMAL(10, 8) NOT NULL,
    longitude DECIMAL(11, 8) NOT NULL
);

INSERT INTO rastreamentos (placa_veiculo, nome_funcionario, data_ocorrencia, velocidade_maxima, velocidade_registrada, latitude, longitude)
VALUES
('ABC1234', 'João Silva', '2025-01-25 08:30:00', 80, 95, -23.550520, -46.633308),
('XYZ5678', 'Maria Oliveira', '2025-01-25 09:45:00', 100, 110, -22.908333, -43.196388),
('LMN4321', 'Carlos Pereira', '2025-01-25 10:00:00', 90, 80, -15.780148, -47.929222),
('PQR8765', 'Ana Souza', '2025-01-25 11:15:00', 110, 102, -25.428954, -49.267137),
('STU1357', 'Ricardo Santos', '2025-01-25 12:30:00', 80, 72, -3.717222, -38.543056),
('VWX2468', 'Fernanda Costa', '2025-01-25 13:45:00', 110, 118, -19.815711, -43.954223),
('YZ12345', 'Pedro Almeida', '2025-01-25 14:00:00', 130, 125, -26.304347, -48.848050);

