<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RestApiController extends Controller
{
    public function fetchGeneral()        /* recorre la seccion inicial de la API */
    {
        $response = Http::get('https://rickandmortyapi.com/api', [
            'apiKey' => 'rMolfpWdQq08FzYCRnCak7IR9L8TTHeILHl4DWlJ'
        ]);
        $options = json_decode($response->body());
        return view('restapi.general', compact('options'));
    } 

    public function fetchCharacters()        /* validacion de los datos */
    {
        $response = Http::get('https://rickandmortyapi.com/api/character', [
            'apiKey' => 'rMolfpWdQq08FzYCRnCak7IR9L8TTHeILHl4DWlJ'
        ]);
        $allcharacters = json_decode($response->body());

        $characters = $allcharacters->results;
        return view('restapi.characters', compact('characters'));
    } 

    public function fetchLocations()
    {
        $response = Http::get('https://rickandmortyapi.com/api/location', [
            'apiKey' => 'rMolfpWdQq08FzYCRnCak7IR9L8TTHeILHl4DWlJ'
        ]);
        $alllocations = json_decode($response->body());

        $locations = $alllocations->results;
        return view('restapi.locations', compact('locations'));
    } 

    public function fetchEpisodes()
    {
        $response = Http::get('https://rickandmortyapi.com/api/episode', [
            'apiKey' => 'rMolfpWdQq08FzYCRnCak7IR9L8TTHeILHl4DWlJ'
        ]);
        $allepisodes = json_decode($response->body());

        $episodes = $allepisodes->results;
        return view('restapi.episodes', compact('episodes'));
    } 
}
