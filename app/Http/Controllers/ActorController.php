<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;
class ActorController extends Controller
{
    function directory()
    {
        $actores = Actor::orderBy("last_name")->get();
        return view("actores", compact("actores"));
    }
    function show($id)
    {
        $actor = Actor::find($id);
        return view("actor",compact("actor"));
    }
    function search()
    {
        $nombre = $_GET["buscar"];

        $actores = Actor::where("first_name","like","%$nombre%")->orderBy("last_name")->get();
        return view("actores",compact("actores"));
    }
}
