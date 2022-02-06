<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Storage;

class DistanceController extends Controller
{
    /**
     * Display distances within 100KM in HTML
     * @return View
     */
    public function __invoke()
    {

        $file = Storage::get('affiliates.txt');
        $explode = explode("}", $file);
        $textEntries = [];
        foreach ($explode as $line) {
            $textEntries[] = json_decode($line .= "}", true);
        }
        $validLocations = [];
        foreach ($textEntries as $location) {
            $distance = $this->calculateDistance($location["latitude"], $location["longitude"], "53.3340285", "-6.2535495");

            if ($distance <= 100 && $distance != false) {
                $validLocations[] = $location;
            }
        }
        $sort = array_column($validLocations, "affiliate_id" );
        array_multisort($sort, SORT_ASC, $validLocations);

        return view('distances') ->with(['contents' => $validLocations]);
    }

    /**
    * Calculate Great Circle Distance
    * @var string $latitude1 
    * @var string $longitude1
    * @var string $latitude2
    * @var string $longitude2
    * @return float $distance
    **/
    public function calculateDistance($latitude1, $longitude1, $latitude2, $longitude2) 
    {
          if ($latitude1 == "" || $latitude2 == "" || $longitude1 == "" || $latitude2 == "") {
            return false;
          }
          $theta = $longitude1 - $longitude2; 
          $distance = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta))); 
          $distance = acos($distance); 
          $distance = rad2deg($distance); 
          $distance = $distance * 60 * 1.1515; 
          $distance = $distance * 1.609344; 
          return $distance;
    }
}