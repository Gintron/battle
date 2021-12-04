<?php

namespace App\Http\Controllers;

use App\Battle\Battle;

class BattleController extends Controller
{
    public function __construct(Battle $battle)
    {   
        $this->battle = $battle;
    }

    public function index(){
        return view('battle.index');
    }

    public function result(){
        $stats = $this->battle->getStats(request('army1'),request('army2'));

        return view('battle.result', ['stats' => $stats]);
    }

    
}
