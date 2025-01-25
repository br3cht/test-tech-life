<?php

namespace Src\Controller;

use Src\Repository\Rastreamento;
use Src\Repository\RastreamentoRepository;

class RastreamentoController
{
    private RastreamentoRepository $rastreamento;

    public function __construct()
    {
        $this->rastreamento = new RastreamentoRepository();
    }

    public function getAllTRackings(): string
    {
        $data = $this->rastreamento->getTracking();

        return json_encode([
            'status' => 'success',
            'data' => $data
        ]);
    }
}
