<?php	

if ($x_stop_lp == 0 ) {
$x_admin = 0;

//$vipt = (array_search($chistx, $r_adm, true) !== false);
 
 
  
//////////////////////////////////////////////////////////////////////////////////////////+ LOG CLEANER
//////////////////////////////////////////////////////////////////////////////////////////+ LOG CLEANER	
//////////////////////////////////////////////////////////////////////////////////////////+ LOG CLEANER	
if(!file_exists($cpath . 'ReCodMod/x_cron/cron_q')){
touch($cpath.'ReCodMod/x_cron/cron_q');
touch($cpath.'ReCodMod/x_cron/cron_gts');
touch($cpath.'ReCodMod/x_cron/cron_idk');	
touch($cpath.'ReCodMod/x_cron/cron_y');
touch($cpath.'ReCodMod/x_cron/cron_dbx');
$dir = $cpath."ReCodMod/x_logs/backup"; 
if(!is_dir($dir)) mkdir($dir, 0777, true) ;
chmod($cpath."ReCodMod/x_logs/backup", 0777);
}

$cron_timeq=filemtime($cpath."ReCodMod/x_cron/cron_q");        
if (time()-$cron_timeq>=60*10) {              
    file_put_contents($cpath."ReCodMod/x_cron/cron_q","");    

	$flmbx = $cpath . "ReCodMod/x_logs/chat.html";
	
if (filesize($flmbx) > ($cht_archive * 1000000))
  {

AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='silver'> Chat log $cht_archive mb auto reset! </font> "); 
echo "OK ...";
 
 if(file_exists($cpath . 'ReCodMod/x_logs/chat.log')){
$file = $cpath . "ReCodMod/x_logs/chat.log";
$newfile = $cpath . "ReCodMod/x_logs/archive/chat/chat";
$datetime = date('Y.m.d H:i:s');
if (!copy($file, $newfile."_".$datetime.".log")) {
    echo "Error copy $file...\n";}else{
$handlePos=fopen($cpath."ReCodMod/x_logs/chat.log" ,"w+");
fwrite($handlePos, "1");
  fclose($handlePos);}}

 if(file_exists($cpath . 'ReCodMod/x_logs/chat.html')){
$file = $cpath . "ReCodMod/x_logs/chat.html";
$newfile = $cpath . "ReCodMod/x_logs/archive/chat/chat";
$datetime = date('Y.m.d H:i:s');
if (!copy($file, $newfile."_".$datetime.".html")) {
    echo "Error copy $file...\n";}else{
$handlePos=fopen($cpath."ReCodMod/x_logs/chat.html" ,"w+");
fwrite($handlePos, "1");
 fclose($handlePos);}}
}}
 
 
 
 
$cron_timeq=filemtime($cpath."ReCodMod/x_cron/cron_dbx");        
if (time()-$cron_timeq>=60*60*$cht_databases) {              
    file_put_contents($cpath."ReCodMod/x_cron/cron_dbx","");    

	
 if(file_exists($cpath . 'ReCodMod/databases/db0.sqlite')){
$file = $cpath . "ReCodMod/databases/db0.sqlite";
$newfile = $cpath . "ReCodMod/x_logs/backup/";
$datetime = date('Y.m.d H:i:s');
if (!copy($file, $newfile."_".$datetime.".db0.sqlite")) {
    echo "Error copy $file...\n";}}
	
	 if(file_exists($cpath . 'ReCodMod/databases/db1.sqlite')){
$file = $cpath . "ReCodMod/databases/db1.sqlite";
$newfile = $cpath . "ReCodMod/x_logs/backup/";
$datetime = date('Y.m.d H:i:s');
if (!copy($file, $newfile."_".$datetime.".db1.sqlite")) {
    echo "Error copy $file...\n";}}
	
if(!empty($bannlist)){
	 if(file_exists($cpath . 'ReCodMod/databases/db2.sqlite')){
$file = $cpath . "ReCodMod/databases/db2.sqlite";
$newfile = $cpath . "ReCodMod/x_logs/backup/";
$datetime = date('Y.m.d H:i:s');
if (!copy($file, $newfile."_".$datetime.".db2.sqlite")) {
    echo "Error copy $file...\n";}}
}else{
	 if(file_exists($bannlist)){
$file = $bannlist;
$newfile = $cpath . "ReCodMod/x_logs/backup/";
$datetime = date('Y.m.d H:i:s');
if (!copy($file, $newfile."_".$datetime.".db2.sqlite")) {
    echo "Error copy $file...\n";}}
}

	 if(file_exists($cpath . 'ReCodMod/databases/db3.sqlite')){
$file = $cpath . "ReCodMod/databases/db3.sqlite";
$newfile = $cpath . "ReCodMod/x_logs/backup/";
$datetime = date('Y.m.d H:i:s');
if (!copy($file, $newfile."_".$datetime.".db3.sqlite")) {
    echo "Error copy $file...\n";}}
	
	 if(file_exists($cpath . 'ReCodMod/databases/db4.sqlite')){
$file = $cpath . "ReCodMod/databases/db4.sqlite";
$newfile = $cpath . "ReCodMod/x_logs/backup/";
$datetime = date('Y.m.d H:i:s');
if (!copy($file, $newfile."_".$datetime.".db4.sqlite")) {
    echo "Error copy $file...\n";}}	
	

}	
 
 
 
 
try
  {
	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);
$sql = "SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1";
$result = $db->query($sql);
 
    foreach($result as $row)
    {

   $adm_ip  = $row['s_adm'];
   $a_grp  = $row['s_group'];
   
  $adm_ip = trim($adm_ip);
  $i_ipo = trim($i_ip);  
 
  if(($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)|| (array_search(strtolower($i_ip), $adminIP, true) !== false)||($adm_ip == $i_ipo) && (($a_grp == 0) || ($a_grp == 111)))
   {
$cron_time=filemtime($cpath."ReCodMod/x_cron/cron_time");        //получаем время последнего изменения файла
if (time()-$cron_time>=600) {             //сравниваем с текущим временем - 10 минут
    file_put_contents($cpath."ReCodMod/x_cron/cron_time","");    //перезаписываем файл cron_time
 ///admin is online
$vv = $adm_ip;
echo '      admin online='.$vv; 	
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='silver'> Admin online </font> "); 

}

if ($game_ac == '0'){

                    }
                    else 
					{				
//usleep($sleep_rcon);
//rcon('say ^6 ^2Admin ^6[^7'.$i_name.'^6] ^2online', '');					
					}      
	        $x_admin = 1;
	}	
}

$result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }
    	
  if($x_admin == 0)
	      {	
 
try
  {
	  
////////////////////////////
 if (empty($bannlist))	  
$db2 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db2.sqlite');
else
$db2 = new PDO('sqlite:'.$bannlist);
////////////////////////////
	
if (empty($i_ip))
$i_ip = '-';

$sql = "SELECT * FROM bans WHERE ip='$i_ip'";
$result = $db2->query($sql);
 
    foreach($result as $row)
    {
  
  
		$ipuuu = $row['ip'];
		$playername1 = $row['playername'];
		$reason  = 	$row['reason'];		
      if ($x_number != 1)
		{
		//rcon('tell '. $i_id . ' ' . $playername1 . ' "'.$ban_ip.'"', '');
		  usleep($sleep_rcon);
 
if ($game_ac == '0'){ 
	
usleep($sleep_rcon);
if (($game_patch == 'cod2') || ($game_patch == 'cod4') || ($game_patch == 'cod5'))
	rcon('clientkick '. $i_id.' BAN!', '');
else
        rcon('clientkick '. $i_id, '');
++$x_stop_lp;


 }
else { 
		
	
$cron_time=filemtime($cpath."ReCodMod/x_cron/cron_time1");        //получаем время последнего изменения файла
if (time()-$cron_time>=120) {             //сравниваем с текущим временем - 10 минут
    file_put_contents($cpath."ReCodMod/x_cron/cron_time1","");    //перезаписываем файл cron_time
	
		rcon('say  ^7' . $playername1 . ' '.$ban_ip_all.' ^7'.$infooreas.':^1 '.$reason.'', '');
		                     }
		  
		  usleep($sleep_rcon);   
rcon('akick '. $i_id.' " ^6[^7BAN^6]"', ''); }

		AddToLog("[".$datetime."] KICK: " . $i_ip . " (" . $i_name . ")  reason: Ip banned");	++$x_stop_lp; 				
		++$x_number;
		echo ' bans   '.$tfinishh = (microtime(true) - $start);
		}	
	}

$result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }	
	
    }
  
$x_admin = 0;
} 

 
	
?>
 
