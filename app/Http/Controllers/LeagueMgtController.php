<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Managers\LeagueManager;

class LeagueMgtController
{

    public function __construct(LeagueManager $leagueManager)
    {
        $this->$leagueManager = $leagueManager;
    }

    public function index(Request $request)
    {
        dd($this->leagueManager->setup($request->teams));
    }
}
