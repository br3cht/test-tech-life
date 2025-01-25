<?php

namespace Src\Repository;

use Database;

class RastreamentoRepository
{
    private Database $database;

    public function __construct()
    {
        $this->database = New Database();
    }

    public function getTracking()
    {

        if(!$this->database->connect()){
            return json_encode(array(
                'status' => 'failure',
                'message' => 'Erro ao conectar ao banco'
            ));
        }

        $data = $this->database->sqlQueryArray(
            "SELECT
                r.placa_veiculo
                r.nome_funcionario
                r.data_ocorrencia
                r.velcidade_maxima
                r.velocidade_registrada
                r.latitude
                r.longitude
            FROM RASTREAMENTOS.r
            "
        );

        return $data;
    }
}
