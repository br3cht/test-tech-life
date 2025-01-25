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
        $status = 'success';

        $data = $this->rastreamento->getTracking();
        if (empty($data)) {
            $status = 'failure';
        }

        return json_encode([
            'status' => $status,
            'data' => $data
        ]);
    }
}
