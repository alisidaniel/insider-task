<?php

namespace App\Managers;

use App\Models\Team;

class FixturesManager
{

    public function generateFixtures($numOfTeams)
    {
        $teamIds = Team::all()->pluck('id')->toArray();
        $fixturesDone = []; // fixtures for a team stored by index
        $weeks = ($numOfTeams - 1) * 2;
        $weeklyMatches = $numOfTeams / 2;

        $new = array(...$teamIds);

        for ($i = 0; $i <= $weeks; $i++) {
            // for ($j = 0; $j <= $weeklyMatches; $j++) {
            // }
            if ($i >= $weeklyMatches) {
            } else {
                // $splice = unset($new[$i]);
                // dump(unset($new[$i]));
            }
        }

        // for ($i = 0; $i <= count($teamIds) - 1 ; $i++) {
        //     for ($j = 0; $j <= count($teamIds) - 1; $j++) {
        //         if ($teamIds[$i] == $teamIds[$j]) {
        //             continue;
        //         }
        //         $homeTeamFixtures = $fixturesDone[$teamIds[$i]] ?? 1;
        //         $awayTeamFixtures = $fixturesDone[$teamIds[$j]] ?? 1;

        //         // here we have the ids for the different teams
        //         // we also create the fixtures here also
        //         dump($teamIds[$i]);
        //         dump($teamIds[$j]);
        //         dump("Number of fixtures for home team $homeTeamFixtures");
        //         dump("Number of fixtures for away team $awayTeamFixtures");

        //         if($homeTeamFixtures == $awayTeamFixtures) {
        //             dump("This is a week $homeTeamFixtures match");
        //         }

        //         $fixturesDone[$teamIds[$i]] = $homeTeamFixtures + 1;
        //         $fixturesDone[$teamIds[$j]] = $awayTeamFixtures + 1;
        //     }
        // }
    }
}
