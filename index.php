<?php

$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
print "<br/>";

//question 2

$dateWithSlash = str_replace('-' , '/' , $date);
echo "The value of \$date: ".$dateWithSlash."<br>";
print "<br/>";


//question3
$dateWithDash = str_replace('/' , '-' , $tar);
$tar1 = date_create($dateWithDash);
$date1 = date_create($date);
$interval  = date_diff($tar1, $date1);
echo $numberOfDaysDiff= $interval->format('%a');

if ($interval->invert == 1)
{
  $numberOfDaysDiff = $numberOfDaysDiff  * -1;
}

if ($numberOfDaysDiff>0) {
   echo "the future";
      
} else if ($numberOfDaysDiff<0) {
   echo "the past";

} else { 
   echo "Oops";
   
}
    
print "<br/>";

//question4

preg_match_all('/\//', '2015/25/04', $matches, PREG_OFFSET_CAPTURE);
$MatchesArray= $matches[0];
foreach($MatchesArray as $match){
print $match[1] . ' ' ;
}
print "<br/>";

//question5

$stringLength1= strlen($date);
echo $stringLength1;
print "<br/>";

//Question6

$stringLength1= strlen($date);
echo $stringLength1;
print "<br/>";

//question7

$string2= "Hello";
$i=substr($string2, 0, 1);
$char=ord($i);
print $i .'  the ASCI value is ' . $char;
print "<br/>";

//question8

$ii=substr($date, -2);
print $ii;
print "<br/>";

//question 9

$array=explode( '/' , $dateWithSlash);
print_r($array);
print "<br/>";

//question 10

function is_leap_year($year) {
return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year % 400) ==
0)));
}

$years = Array(2012, 396, 300, 2000, 1100, 1089);

foreach($years as $value)

{
	  
   for($i=0; $i < sizeof($years); $i++)
    break;
    {
		    
$is_leap_year = is_leap_year($value);
switch($is_leap_year)
       {
      case true:
      echo "true\n";
      break;
     case false:
      echo "false\n";
    break;
       }
     }
										  }

print "<br/>";

?>
