<?php

class Display extends Garage {

    public function displayGarages($GarageOwner){
        $results = $this->getGaragesByOwner($GarageOwner);
        $this->displayJSON($results);
    }

    public function displayGaragesByCountry($Country){
        $results = $this->getGaragesByCountry($Country);
        $this->displayJSON($results);
    }

    public function displayGaragesByOwner($GarageOwner){
        $results = $this->getGaragesByOwner($GarageOwner);
        $this->displayJSON($results);
    }

    public function displayGaragesByLocation($point_lat, $point_long){
        $results = $this->getGaragesByLocation($point_lat, $point_long);
        $this->displayJSON($results);
    }

    Private function displayJSON($results){

        if(count($results) > 0){
            echo "{ <br>'result:' true, <br>'garages': <br>" ;
            echo json_encode($results);
            echo "<br>}";
        } else {
            echo "{ <br>'result:' false" ;
            echo "<br>}";
        }
    }
}