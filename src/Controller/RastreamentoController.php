<?php

namespace Src\Controller;

use Exception;
use Src\Repository\Rastreamento;
use Src\Repository\RastreamentoRepository;

class RastreamentoController
{
    private RastreamentoRepository $rastreamento;

    public function __construct()
    {
        $this->rastreamento = new RastreamentoRepository();
    }

    public function getAllTRackings(
        array $dataRequest
    ): string
    {
        try {
            $data = $this->rastreamento->getTracking([
                'funcionario' => array_key_exists('funcionario', $dataRequest) ? $dataRequest['funcionario'] : null,
                'placa' => array_key_exists('placa', $dataRequest) ? $dataRequest['placa'] : null,
                'data_inicial' => array_key_exists('data_inicial', $dataRequest) ? $dataRequest['data_inicial'] : null,
                'data_final' => array_key_exists('data_final', $dataRequest) ? $dataRequest['data_final'] : null
            ]);

            $data = $this->calculateDiff($data);

            return json_encode([
                'status' => 'success',
                'data' => $data
            ]);
        } catch (Exception $exception) {
            return json_encode([
                'status' => 'failure',
                'data' => []
            ]);
        }
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
