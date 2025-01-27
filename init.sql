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
('AAA1111', 'Joao Silva', '2024-12-21 08:45:00', 90, 100, -23.550520, -46.633308),
('BBB2222', 'Maria Santos', '2024-01-12 09:00:00', 80, 100, -22.908333, -43.196388),
('CCC3333', 'Carlos Pereira', '2025-01-10 09:15:00', 100, 120, -15.780148, -47.929222),
('DDD4444', 'Ana Souza', '2025-01-12 09:30:00', 110, 115, -25.428954, -49.267137),
('EEE5555', 'Ricardo Mendes', '2025-01-14 09:45:00', 80, 90, -3.717222, -38.543056),
('FFF6666', 'Fernanda Lima', '2025-01-25 10:00:00', 110, 130, -19.815711, -43.954223),
('GGG7777', 'Pedro Gomes', '2024-04-16 10:15:00', 120, 125, -26.304347, -48.848050),
('HHH8888', 'Juliana Costa', '2024-06-25 10:30:00', 100, 120, -23.550520, -46.633308),
('III9999', 'Fabio Almeida', '2024-08-26 10:45:00', 90, 100, -22.908333, -43.196388),
('JJJ1010', 'Mariana Souza', '2024-02-26 11:00:00', 80, 82, -15.780148, -47.929222),
('KKK1111', 'Diego Oliveira', '2024-07-10 11:15:00', 90, 94, -25.428954, -49.267137),
('LLL1212', 'Patricia Silva', '2024-06-27 11:30:00', 100, 102, -3.717222, -38.543056),
('MMM1313', 'Rafael Santos', '2024-07-10 11:45:00', 110, 109, -19.815711, -43.954223),
('NNN1414', 'Bianca Souza', '2024-08-26 12:00:00', 80, 108, -26.304347, -48.848050),
('OOO1515', 'Lucas Mendes', '2024-02-25 12:15:00', 120, 118, -23.550520, -46.633308),
('PPP1616', 'Camila Costa', '2024-01-16 12:30:00', 100, 120, -22.908333, -43.196388),
('QQQ1717', 'Eduardo Lima', '2024-06-25 12:45:00', 90, 100, -15.780148, -47.929222),
('RRR1818', 'Sofia Pereira', '2025-01-25 13:00:00', 110, 113, -25.428954, -49.267137),
('SSS1919', 'Rodrigo Silva', '2025-01-25 13:15:00', 80, 90, -3.717222, -38.543056),
('TTT2020', 'Juliana Lima', '2025-01-25 13:30:00', 90, 100, -19.815711, -43.954223),
('UUU2121', 'Fernando Souza', '2025-01-25 13:45:00', 120, 130, -26.304347, -48.848050),
('VVV2222', 'Renata Gomes', '2025-01-25 14:00:00', 100, 108, -23.550520, -46.633308),
('WWW2323', 'Marcos Santos', '2025-01-25 14:15:00', 90, 100, -22.908333, -43.196388),
('XXX2424', 'Priscila Oliveira', '2025-01-25 14:30:00', 80, 95, -15.780148, -47.929222),
('YYY2525', 'Anderson Silva', '2025-01-25 14:45:00', 110, 120, -25.428954, -49.267137),
('ZZZ2626', 'Larissa Costa', '2025-01-25 15:00:00', 80, 90, -3.717222, -38.543056),
('AAA2727', 'Thiago Lima', '2025-01-25 15:15:00', 100, 120, -19.815711, -43.954223),
('BBB2828', 'Claudia Mendes', '2025-01-25 15:30:00', 80, 100, -26.304347, -48.848050),
('CCC2929', 'Luis Almeida', '2025-01-25 15:45:00', 90, 98, -23.550520, -46.633308),
('DDD3030', 'Tatiana Santos', '2025-01-25 16:00:00', 90, 99, -22.908333, -43.196388),
('EEE3131', 'Igor Souza', '2025-01-25 16:15:00', 80, 100, -15.780148, -47.929222),
('FFF3232', 'Paula Lima', '2025-01-25 16:30:00', 110, 119, -25.428954, -49.267137),
('GGG3333', 'Rafael Costa', '2025-01-25 16:45:00', 80, 83, -3.717222, -38.543056),
('HHH3434', 'Adriana Santos', '2025-01-25 17:00:00', 90, 98, -19.815711, -43.954223),
('III3535', 'Leonardo Silva', '2025-01-25 17:15:00', 120, 120, -26.304347, -48.848050),
('JJJ3636', 'Fernanda Almeida', '2025-01-25 17:30:00', 100, 100, -23.550520, -46.633308),
('KKK3737', 'Andressa Gomes', '2025-01-25 17:45:00', 90, 90, -22.908333, -43.196388),
('LLL3838', 'Rodrigo Lima', '2025-01-25 18:00:00', 80, 88, -15.780148, -47.929222),
('MMM3939', 'Patricia Souza', '2025-01-25 18:15:00', 110, 114, -25.428954, -49.267137),
('NNN4040', 'Victor Silva', '2025-01-25 18:30:00', 80, 89, -3.717222, -38.543056),
('OOO4141', 'Amanda Costa', '2025-01-25 18:45:00', 100, 112, -19.815711, -43.954223),
('PPP4242', 'Henrique Mendes', '2025-01-25 19:00:00', 120, 122, -26.304347, -48.848050),
('QQQ4343', 'Marina Santos', '2025-01-25 19:15:00', 100, 103, -23.550520, -46.633308),
('RRR4444', 'Eduarda Souza', '2025-01-25 19:30:00', 80, 86, -22.908333, -43.196388),
('SSS4545', 'Luana Silva', '2025-01-25 19:45:00', 80, 81, -15.780148, -47.929222),
('TTT4646', 'Daniel Gomes', '2025-01-25 20:00:00', 90, 108, -25.428954, -49.267137);

