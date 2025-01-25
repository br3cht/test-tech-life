<?php

namespace Src\Repository;

use Database;
use Exception;

class RastreamentoRepository
{
    private Database $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getTracking(array $filters): array
    {

        if (!$this->database->connect()) {
            throw new Exception('');
        }

        $data = $this->database->sqlQueryArray(
            "SELECT
             *
            FROM rastreamentos
            {$this->filterByPlaca($filters['placa'])}
            {$this->filterByFuncionario($filters['funcionario'])}
            {$this->filterByDataOcorrencia($filters['data_inicial'], $filters['data_final'])}
            "
        );

        if(!is_array($data)){
            return [];
        }

        return $data;
    }

    private function filterByPlaca(string|null $placa): string
    {
        if($placa){
            return "WHERE placa_veiculo LIKE '%{$placa}%'";
        }

        return '';
    }

    private function filterByFuncionario(string|null $funcionario): string
    {
        if($funcionario){
            return "WHERE nome_funcionario LIKE '%{$funcionario}%'";
        }

        return '';
    }

    private function filterByDataOcorrencia(string|null $dateStart, string|null $dateEnd): string
    {
        if(empty($dateStart) || empty($dateEnd)) {
            return '';
        }

        return "WHERE DATE(data_ocorrencia) BETWEEN '{$dateStart}' AND '{$dateEnd}'";
    }
}
