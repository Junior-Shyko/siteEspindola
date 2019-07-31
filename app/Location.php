<?php

namespace SiteEspindola;

use Illuminate\Database\Eloquent\Model;
use SiteEspindola\Location;
use DB;

class Location extends Model
{
	protected $primaryKey = 'locations_id';

    public $timestamps = false;

    protected $fillable = [
			
            'locations_user_agent',
            'locations_ip',
            'locations_route',
            'locations_latitude',
            'locations_longitude',
            'locations_city',
            'locations_country',
            'locations_regionName',
            'locations_timezone',
            'locations_page_previous',
            'locations_date_time'
        ];    

    static public function createLocation($user_agent, $ip, $route, $lat, $log, $city, $country, $region, $timezone, $page_previous, $date)
    {
       

    	try {
	    	Location::insert(['locations_user_agent' => $user_agent, 'locations_ip' => $ip , 'locations_route' => $route ,'locations_latitude' => $lat ,'locations_longitude' => $log ,'locations_city' => $city ,'locations_country' => $country ,'locations_regionName' => $region ,'locations_timezone' => $timezone ,'locations_page_previous' => $page_previous ,'locations_date_time' => $date]);
    		return true;

    	} catch (Exception $e) {

    		return false;

    	}
    	

    }     
}
