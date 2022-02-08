<?php
namespace App\Managers;
use App\Models\Team;

class LeagueManager {

    protected $fixturesManager;

    public function __contruct(FixturesManager $fixtureManager)
    {
        $this->fixtureManager = $fixtureManager;
    }

    public function setup($numOfTeams)
    {
      $this->generateTeams($numOfTeams);
      
      $this->setFixtures($numOfTeams);
    }
    
    public function generateTeams($numOfTeams)
    {
      foreach(range(1, $numOfTeams) as $index=>$value) {
            Team::factory()->create(['name'=> 'INS'.$value]);
        }
    }

    public function setFixtures($numOfTeams)
    {
        $this->fixtureManager->generateFixtures($numOfTeams);
    }

}