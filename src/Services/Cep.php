<?php

namespace BrunoCouty\BuscaViaCep\Services;

use GuzzleHttp\Client;

class Cep
{
    public function busca(string $cep)
    {
        $guzzle = new Client([
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ]
        ]);
        try{
            $response = $guzzle->get("https://viacep.com.br/ws/{$cep}/json/unicode/");
        } catch (\Exception $e) {
            return response([
                'message' => $e->getMessage(),
                'code' => $e->getCode()
            ], 422);
        }
        return response([json_decode((string)$response->getBody(), true)], $response->getStatusCode());
    }
}