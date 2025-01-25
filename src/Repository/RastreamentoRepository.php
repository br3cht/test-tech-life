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
            return null;
        }

        $data = $this->database->sqlQueryArray(
            "SELECT
             *
            FROM rastreamentos
            "
        );

        return $data;
    }
}
