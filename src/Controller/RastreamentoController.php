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

        $data = $this->calculateDiff($data);

        return json_encode([
            'status' => $status,
            'data' => $data
        ]);
    }

    private function calculateDiff(array $data)
    {
        foreach($data as &$item)
        {
            $item['vel_diff'] = (($item['velocidade_registrada'] - $item['velocidade_maxima']) / $item['velocidade_maxima'])  * 100;
            $item['vel_diff'] = number_format($item['vel_diff'], 2) . '%';
        }

        return $data;
    }
}
