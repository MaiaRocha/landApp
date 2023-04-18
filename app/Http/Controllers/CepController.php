<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CepController extends Controller
{
    public function getCep($cep) {

        try {

            $response = Http::get("viacep.com.br/ws/$cep/json/");

            
            if($response->failed()){
                throw new Exception;
            }

            $responseBody = json_decode($response->body());

            return response()->json($responseBody, 200);

        } catch (Exception $e) {
            return response()->json(['errors' => ['Cep inválido']], 400);
        }

    }
}
