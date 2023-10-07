<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index(Request $request)
    {
      try{
        $ciudad = $request->ciudad;

        $url = env('API_URL')."?q=$ciudad";

        $client = new \GuzzleHttp\Client();


        $response = $client->request('GET', $url, [
            'headers' => [
                'X-RapidAPI-Host' => env('API_HOST'),
                'X-RapidAPI-Key' => env('API_KEY'),
            ],
            'verify' => base_path('certificaciones/cacert.pem'),
        ]);

        $data = json_decode($response->getBody(), true);


        // return view('Ciudad.ciudad', ['weatherData' => $data]);
        return redirect()->route('ciudad')->with(['weatherData' => $data]);



      }catch(\GuzzleHttp\Exception\RequestException $e){

        $statusCode = $e->getResponse()->getStatusCode();
        $errorData = $e->getMessage();

        
        return redirect()->route('errores')->with(['errorData' => $errorData, 'statusCode' => $statusCode]);

      }

        
    }
}
