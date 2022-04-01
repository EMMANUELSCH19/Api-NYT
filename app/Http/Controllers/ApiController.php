<?php

namespace App\Http\Controllers;

use App\Models\Episodios;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Obtiene todos los artículos de Harry Houdini
     *
     * @return view('articulos', ['articulos' => $articulos]);
     */

    public function getNYT(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.nytimes.com/svc/search/v2/articlesearch.json?q=Harry Houdini&api-key=Wg2dUHKEdQtFE0coBu1yOAPbpUzfdTqq');
        $data = json_decode($response->getBody()->getContents(), true);

        $Articulos = [];

        foreach ($data['response']['docs'] as $articulo){
            $Articulos[] = [
                'title' => $articulo['headline']['main'],
                'snippet' => $articulo['snippet'],
                'web_url' => $articulo['web_url'],
                'lead_paragraph' => $articulo['lead_paragraph']
            ];
        }
        return view('articulos', ['Articulos' => $Articulos]);
    }


    public function getSerie()
    {
        $episodios = Episodios::all();
        return response()->json([
            'episodios' => $episodios
        ], 200);
    }

    /**
     * Obtiene todos los episodios de la serie
     *
     * @return view('serie', ['Episodios' => $Episodios]);
     */

    public function getEpisodio()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', '');
    }
}
