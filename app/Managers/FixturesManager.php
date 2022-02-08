<?php

namespace App\Managers;

use App\Models\Team;

class FixturesManager
{

    public function setFixtures($numOfTeams)
    {
        $teamIds  = Team::all()->pluck('id')->toArray();
        for ($i = 0; $i <= count($teamIds); $i++) {
            for ($j = 0; $j <= count($teamIds); $j++) {
                if ($teamIds[$i] == $teamIds[$j]) {
                    continue;
                }

                // here we have the ids for the different teams
                // we also create the fixtures here also
                dump($teamIds[$i]);
                dump($teamIds[$j]);
            }
        }
    }
}
