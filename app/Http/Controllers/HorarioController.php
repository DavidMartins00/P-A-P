<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HorarioController extends Controller
{

    public function index()
    {
        return view('horario/index');
    }

    public function LoadHorario()
    {
        $events = Event::where('funcid',Auth::id())->get();
        return response()->json($events);
    }
}
