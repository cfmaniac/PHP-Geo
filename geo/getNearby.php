<?php
/**
 * Created by IntelliJ IDEA.
 * User: JHarvey
 * Date: 10/16/2015
 * Time: 10:35 AM
 *
 * API:
 * http://www.geoplugin.net/extras/nearby.gp?lat=XXX&long=YYY&limit=10&radius=50
 * */
 ini_set('display_errors',1);
 ini_set('display_startup_errors',1);
 error_reporting(-1);
  
 
 $radius = '25';
 $limit = '25';
 $lat = $_GET['lat'];
 $lon = $_GET['long'];




 
 $getURL = 'http://www.geoplugin.net/extras/nearby.gp?lat='.$lat.'&long='.$lon.'&limit='.$limit.'&radius='.$radius.'&format=xml';
 
 $NearBy = simplexml_load_file($getURL);
 

 
 
 echo '<option value="">Nearby Cities</option>';
 foreach($NearBy->geoPlugin_nearby as $city)
{

 echo '<option value="">'. $city->geoplugin_place .' ('. $city->geoplugin_distanceMiles. ' Miles)</option>';
}

 
 
 
 