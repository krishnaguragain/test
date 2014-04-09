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
?>
