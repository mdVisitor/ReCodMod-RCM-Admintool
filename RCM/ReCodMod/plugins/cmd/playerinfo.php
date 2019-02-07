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
        //$yomapratation = 0;
        usleep($sleep_rcon * 2);
        require $cpath . 'ReCodMod/functions/getinfo/sv_mapRotation.php';
        fclose($connx);
        /*
        $pos = strripos($mapslisst, $mmapname);
        
        if ($pos === false) {
        echo "К сожалению, ($mmapname) не найдена в ($mapslisst)";
        } else {
        echo "Поздравляем!\n";
        echo "($mmapname) найдено в ($mapslisst) в позиции ($pos)";
        }
        */
        $mapslisst = str_replace($mmapname, "^2" . $mmapname . "^7", $mapslisst);
        usleep($sleep_rcon);
	echo 'Nextmap:'.$mapslisst;
        rcon('say ^6 ^1Map ^7' . $mapslisst . '', '');
        AddToLogInfo("[" . $datetime . "] nextmap: " . $i_ip . " (" . $x_namex . ") (" . $user_message . ")");
        ++$x_number;
        echo '  ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
        ++$x_stop_lp; //return;		
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
 
