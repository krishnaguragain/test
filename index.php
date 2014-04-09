<?php

$unixtime = time(); //$date_to_unixtime = strtotime('25th October 2009 11:12:34 PM (UTC)');
// var_dump($unixtime);
// deg2rad(45);
function rad2deg($arg) {
 return $arg*180/pi();
}
$enmonth=array(1 => "January","February","March","April","May","June",
		  "July","August","September","October","November","December");
		  
$enrashi=array("Mesha","Vrishabha","Mithuna","Karka","Simha","Kanya","Tula",
		   "Vrischika","Dhanu","Makara","Kumbha","Meena");	  
$enday =array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

$entithi = ("Prathame","Dwithiya","Thrithiya","Chathurthi","Panchami",
		  "Shrashti","Saptami","Ashtami","Navami","Dashami","Ekadashi",
		  "Dwadashi","Thrayodashi","Chaturdashi","Poornima","Prathame",
		  "Dwithiya","Thrithiya","Chathurthi","Panchami","Shrashti",
		  "Saptami","Ashtami","Navami","Dashami","Ekadashi","Dwadashi",
		  "Thrayodashi","Chaturdashi","Amavasya");

$enkaran=("Bava","Balava","Kaulava","Taitula","Garija","Vanija",
		  "Visti","Sakuni","Chatuspada","Naga","Kimstughna");

$enyoga = ("Vishkambha","Prithi","Ayushman","Saubhagya","Shobhana",
		 "Atiganda","Sukarman","Dhrithi","Shoola","Ganda","Vridhi",
		 "Dhruva","Vyaghata","Harshana","Vajra","Siddhi","Vyatipata",
		 "Variyan","Parigha","Shiva","Siddha","Sadhya","Shubha","Shukla",
		 "Bramha","Indra","Vaidhruthi");
$ennakshatra = ("Ashwini","Bharani","Krittika","Rohini","Mrigashira","Ardhra",
		      "Punarvasu","Pushya","Ashlesa","Magha","Poorva Phalguni","Uttara Phalguni",
		      "Hasta","Chitra","Swathi","Vishaka","Anuradha","Jyeshta","Mula",
		      "Poorva Ashada","Uttara Ashada","Sravana","Dhanishta","Shatabisha",
		      "Poorva Bhadra","Uttara Bhadra","Revathi");
//Function to Calculate Aynamsa
function calc_ayanamsa($d)
{
	// $d in unix format

	$t = ($d+36523.5)/36525;
	$o = 259.183275-1934.142008333206*$t+0.0020777778*$t*$t;
	$l = 279.696678+36000.76892*$t+0.0003025*$t*$t;
	$ayan = 17.23*deg2rad(sin($o))+1.27*deg2rad(sin($l*2))-(5025.64+1.11*$t)*$t;
	//Based on Lahiri
	$ayan = ($ayan-80861.27)/3600.0;

	return $ayan;
}		 
		 
		 
		 
		 
?>
