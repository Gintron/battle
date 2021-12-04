<?php 
namespace App\Battle;

class Battle
{
    public function getStats($army1, $army2){
        $stats[] = array();

        $army1 += $this->getBuff();
        $army2 += $this->getBuff();

        if($army1 > $army2){
            $stats['winner'] = "Army1 won!";
            $stats['points'] = $army1 - $army2;
        }
        else if($army1 < $army2){ 
            $stats['winner'] = "Army2 won!";
            $stats['points'] = $army2 - $army1;
        }
        else{
            $stats['winner'] = "Draw - no one won!";
            $stats['points'] = 0;
        }
        return $stats;    
    }

    public function getBuff(){
        $buffs = array("general" => 5, "earthquakes" => 6, "soldier disease" => 7, "dragon" => 8);

        $key = array_rand($buffs);
        
        return $buffs[$key];
    }
}