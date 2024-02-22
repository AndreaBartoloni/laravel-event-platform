<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $risultato = Car::with('tags')->get();
        $data = [
            "successo" => true,
            "payload" => $risultato
        ];
        return response()->json(
            $data
        );
    }

    // public function create(){
    //     $tags = Tag::all();
    // }

    public function show($id)
    {
        $car = Car::with('tags')->find($id);

        return response()->json([
            "successo" => $car ? true : false,
            "payload" => $car ? $car : "Nessun evento corrispondente all'id"
        ]);
    }
}
