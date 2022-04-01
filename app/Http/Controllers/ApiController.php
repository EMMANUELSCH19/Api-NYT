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

    /**
     * Obtiene todos los videos de Harry Houdini
     *
     * @return view('videos', ['videos' => $videos]);
     */

    public function getYT(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://www.googleapis.com/youtube/v3/search?q=Harry%Houdini&maxResults=12&key=AIzaSyAK6V1P5CFh56sTiW7qF2SLstutmtVmAcA');
        $data = json_decode($response->getBody()->getContents(), true);

        $Videos = [];

        foreach ($data['items'] as $video){
            $Videos[] = [
                'video_id' => $video['id']['videoId'] //id del video
            ];
        }
        return view('videos', ['Videos' => $Videos]);
    }

    /**
     * Obtiene todos los episodios de The Master Mystery
     *
     * @return view('serie', ['episodios' => $episodios]);
     */

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
        $response = $client->request('GET', 'http://houdini-page.herokuapp.com/api/episodios');
        $data = json_decode($response->getBody()->getContents(), true);

        $Episodios = [];

        foreach($data['episodios'] as $episodio){
            $Episodios[] = [
                'id' => $episodio['id'],
                'nombre' => $episodio['nombre'],
                'url' => $episodio['url'],
            ];
        }
        return view('serie', ['Episodios' => $Episodios]);
    }
}
