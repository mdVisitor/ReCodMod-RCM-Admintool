<?php
if ($x_stop_lp == 0 ) {

if ((strpos($msgr, $ixz.'geo') !== false) && ($x_number != 1))
    { 

if (strpos($msgr, $ixz.'geo ') !== false)
 list($x_cmd, $x_idn) = explode(' ', $msgr); // !s 5 ( 5 = id)
else 
 $x_idn = '';
 
if ($x_idn=='')
{

 $x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);

  $mmm = trim($x_nickx);
  $nnn = trim($x_namex);
   	  
	  if((trim($i_id) == trim($idnum)) || (strpos($mmm, $nnn) !== false))
	     {	
		 
		 
		 
////////////////////////////////////////////////////////////////////////////////////////////////////
 if((empty($i_ip)) 
 || (strpos($i_ip, '192.168') !== false)
 || (strpos($i_ip, '255.255') !== false)
 || (strpos($i_ip, 'localhost') !== false)
 || (strpos($i_ip, '127.0.0.1') !== false)
 )
$i_ip = '37.120.56.200';
$gi = geoip_open($cpath."ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat",GEOIP_STANDARD);
$record = geoip_record_by_addr($gi,$i_ip);
$xxxnw = ($record->country_name . ", ".$record->city."");
////////////////////////////////////////////////////////////////////////////////////////////////////	
	usleep($sleep_rcon);
	
	if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam')){	
	rcon('say ^6 "^2'.$infolx.': ^6[^3'.$xxxnw.'^6]"', '');
}else{
	rcon('tell '. $i_id . ' ^6 "^2'.$infolx.': ^6[^3'.$xxxnw.' ^7'.$infooip.':^3'.$i_ip.'^6]"', ''); 
geoip_close($gi);	
}
	AddToLogInfo("[".$datetime."] GEO: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ")");    
	++$x_number;
	
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;	
		 }
 
}
else
{ 
 
$i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 
if($kski[0] == $x_idn) 
	{

if((empty($i_ip)) 
 || (strpos($i_ip, '192.168') !== false)
 || (strpos($i_ip, '255.255') !== false)
 || (strpos($i_ip, 'localhost') !== false)
 || (strpos($i_ip, '127.0.0.1') !== false)
 )
$i_ip = '37.120.56.200';
$gi = geoip_open($cpath."ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat",GEOIP_STANDARD);
$record = geoip_record_by_addr($gi,$i_ip);
$xxxnw = ($record->country_name . ", ".$record->city."");
////////////////////////////////////////////////////////////////////////////////////////////////////	
	usleep($sleep_rcon);
	rcon('say  ^6  ^3'.$i_namex. ' ^6 "^2from:^3 '.$xxxnw.'"', '');
	AddToLogInfo("[".$datetime."] GEO: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ") reason: G+id");    
	++$x_number;
	
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;
	
	}

}

}



if ((strpos($msgr, $ixz.'guid') !== false) && ($x_number != 1))
    { 

if ($x_stop_lp == 0 ) {

if (strpos($msgr, $ixz.'guid ') !== false)
 list($x_cmd, $x_idn) = explode(' ', $msgr); // !s 5 ( 5 = id)
else 
 $x_idn = '';
 
if ($x_idn=='')
{

 $x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);

  $mmm = trim($x_nickx);
  $nnn = trim($x_namex);
   	  
	  if((trim($i_id) == trim($idnum)) || (strpos($mmm, $nnn) !== false))
	     {	
		 
	usleep($sleep_rcon);
	
	if ($guidn == '0')	
		rcon('say ^6  ^7'.$i_name.' ^2'.$infooguid.': ^3'.md5(md5(md5($chistx))).'', ''); 
    else
		rcon('tell '.$idnum.' ^6  ^7'.$i_name.' ^2'.$infooguid.': ^3'.$guidn.'', ''); 	

	AddToLogInfo("[".$datetime."] GEO: " . $i_ip . " (" . $x_namex . ") (" . $guidn . ") reason: G");    
	++$x_number;
	
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;	
		 }
 
}
else
{ 
 
$i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 
if($kski[0] == $x_idn) 
	{


////////////////////////////////////////////////////////////////////////////////////////////////////	
	if ($guidn == '0')	
		rcon('say ^6  ^7'.$i_name.' ^2guid: ^3'.md5(md5(md5($chistx))).'', ''); 
    else
		rcon('tell '.$idnum.' ^6  ^7'.$i_name.' ^2guid: ^3'.$guidn.'', '');
	
	AddToLogInfo("[".$datetime."] GUID: " . $i_ip . " (" . $x_namex . ") (" . $guidn . ")");    
	++$x_number;
	
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;
	
	}}}}
	
	
    if ((strpos($user_message, $ixz . 'ip') !== false) && ($x_number != 1)) {
        if (strpos($x_namex, $x_nickx) !== false) {
            usleep($sleep_rcon);
            if ((($game_patch == 'cod2') || ($game_patch == 'cod4') || ($game_patch == 'cod5')) && (!empty($guidn)))
                rcon('tell ' . $i_id . ' ^2My IP:^3 ' . $i_ip . ' ^2My GUID:^3 ' . $guidn, '');
            else if ($game_patch == 'cod1_1.1')
                rcon('say ^2My IP:^3 ' . $i_ip, '');
            else
                rcon('tell ' . $i_id . ' ^2My IP:^3 ' . $i_ip, '');
            AddToLogInfo("[" . $datetime . "] IP: " . $i_ip . " (" . $x_namex . ") (" . $user_message . ") reason: I");
            ++$x_number;
            //fclose($fpX);
            //fclose($connect);	
            echo '    ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
            ++$x_stop_lp; //return;	
        }
    }

if ((strpos($user_message, $ixz . 'nextmap') !== false) && ($x_number != 1)) {
	  if (strpos($x_namex, $x_nickx) !== false) {
        
		  
		  
		  
		  
	usleep($sleep_rcon);		  

 for ($i=0; $i<1; $i++) 
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';

	
usleep($sleep_rcon);
require $cpath.'ReCodMod/functions/getinfo/sv_mapRotation.php';
fclose($connx);	

 //$emaprun - current map
 //$mapsxc - current game type and map rotation.
 if(empty($emaprun)) {
$status = new COD4xServerStatus($server_ip, $server_port);
                if ($status->getServerStatus())
                 {
                  $status->parseServerData();
   if(empty($emaprun))               
$emaprun = $serverStatus['mapname'];
                 }
}
 
if (preg_match('/\b'.$emaprun.'\b\s\b(.+)/iu', $mapsxc, $match)) {
	$mapnamekl = explode(trim($emaprun), $mapsxc);
        $mapnamekl[1] = preg_replace("/\b[a-z]{1,4}\b/iu", "", $mapnamekl[1]);
	$lll = preg_replace("/\W*\b/iu", "%%", $mapnamekl[1]);
        $emaprunln = explode('%%%%', $lll);
echo "  next map";
echo '---> '.$emaprunl = $emaprunln[1];}

if(empty($emaprunl))
	$emaprunl = 'Unknown';
 
usleep($sleep_rcon);
rcon('say '.$infoomnxtt.' ^7'.$emaprunl.'', '');
++$x_number;	
++$x_return;
if(!empty($db))
$db = NULL;
if(!empty($db1))
$db1 = NULL;
if(!empty($db2))
$db2 = null;
if(!empty($db3))
$db3 = NULL;
if(!empty($db4))
$db4 = NULL;
if(!empty($db5))
$db5 = NULL;
if(is_resource($connect))
fclose($connect);
exit;
 

//}   
  }	  
		  
		  
		  
		  
		  
		  
        ++$x_number;
        echo '  ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
        ++$x_stop_lp; //return;	
		   }
    }

 if ((strpos($user_message, $ixz . 'time') !== false) && ($x_number != 1)) {
        if (strpos($x_namex, $x_nickx) !== false) {
            //include($cpath."ReCodMod/geoip_bases/MaxMD/timezone/timezone.php");	
            $gi     = geoip_open($cpath . "ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat", GEOIP_STANDARD);
            $record = geoip_record_by_addr($gi, $i_ip);
            $xxxnw  = ($record->country_name);
            //Calculate the timezone and local time
            try {
                //Create timezone
                $user_timezone        = new DateTimeZone(get_time_zone($record->country_code, ($record->region != '') ? $record->region : 0));
                //Create local time
                $user_localtime       = new DateTime("now", $user_timezone);
                $user_timezone_offset = $user_localtime->getOffset();
            }
            //Timezone and/or local time detection failed
            catch (Exception $e) {
                $user_timezone_offset = 7200;
                $user_localtime       = new DateTime("now");
            }
            echo 'User local time: ' . $user_localtime->format('H:i:s');
            //echo 'Timezone GMT offset: ' . $user_timezone_offset . '<br/>';
            $serverdate = date('M-d H:i:s');
            usleep($sleep_rcon * 2);
            rcon('say ^6 ^7' . $chistx . ' ^3Geo: ^7' . $xxxnw . ' ^3' . $infootime . ':^7 ' . $user_localtime->format('H:i:s') . ' ^3' . $sunnsett . ': ^7' . date_sunset(time(), SUNFUNCS_RET_STRING, $record->latitude, $record->longitude, ini_get("date.sunset_zenith"), ($user_timezone_offset / 3600)) . ' ^3' . $inforsun . ': ^7' . date_sunrise(time(), SUNFUNCS_RET_STRING, $record->latitude, $record->longitude, ini_get("date.sunrise_zenith"), ($user_timezone_offset / 3600)) . ' ^3' . $infoservv . ': ^7' . $serverdate, '');
            AddToLogInfo("[" . $datetime . "] Time: " . $i_ip . " (" . $x_namex . ") (" . $user_message . ")");
            ++$x_number;
            //f//close($connect);	
            echo '  -time-  ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
            ++$x_stop_lp; //return;	
        }
    }	
}

		 
?>
 
