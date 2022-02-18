<?php
class GarageDisplayController {

    public function ControlGarageDisplay($act) {

        $bjGarage = new Display();

        switch ($act){
            case "ByOwner" :
                $bjGarage->displayGaragesByOwner('AutoPark');
                break;

            case "ByCountry" :
                $bjGarage->displayGaragesByCountry('Finland');
                break;

            case "ByPoint" :
                $bjGarage->displayGaragesByLocation('60.1686739014875100', '24.9301629520454070');
                break;

            default :
                echo "No action selected!";
                break;
        }

    }

}