<?php

//LANGUAGES  en - english, ru - russian, de - germany, fr - france, it - italy, pl - polish, br - brazil, nl -...
$language = 'en';  


//TOP - BY !top => kills, ratio, head shots, bash, knife, grenades, rank, deaths, suicides.
$etop = 'kills';

//SERVERINFO
/*	
FOR messages.cfg.php  use:  $servers_info_messages
FOR Disable => $serverinfo_adress = 0;
*/
$serverinfo_adress = "192.168.1.102:28960;192.168.1.102:28961";


//////////////////////////////////////////////////////////////////////////////////////
//FTP SENT FILES TO ANOTHER WEB HOSTING or localhost!
$ftp_server    = '72.43.26.70';
$ftp_login     = 'ruoikketkhgkii';
$ftp_password  = '7BpKkjnjaPSk8';
//Local path to logs
$local_dir = '/media/Game_Servers/RCM/COD1_1_4_RO_SQL3/ReCodMod/x_logs/';
//Local path to screenshots
$local_dir_getss = '';
//Local paths to databases
$local_dir_databases = '/media/Game_Servers/RCM/COD1_1_4_RO_SQL3/ReCodMod/databases/';
$local_dir_databases2 = '/media/Game_Servers/RCM/BAN_DATABASE/';

///SERVER ROOT FOLDERS, FOR LOGS $ftp_root, FOR IMAGES $ftp_root_getss.
$ftp_root      = '/recod.ru/public_html/rcm_logfiles/COD1_1_4_RO_SQL3/LOGS/';
$ftp_root_getss   = '/recod.ru/public_html/rcm_logfiles/COD1_1_4_RO_SQL3/GETSS/';
$ftp_root_databases   = '/recod.ru/public_html/rcm_logfiles/COD1_1_4_RO_SQL3/DATABASES/';
$ftp_root_databases2   = '/recod.ru/public_html/rcm_logfiles/COD1_1_4_RO_SQL3/BAN_DATABASE/';

////////////////////////////////////ftp autouploader////////////////////////////////////////////////
// DATABASES auto Backup
// to do  -> minimal time 5 sec to ftp host (chat.logs) 500kb autofile, 
// databases minimal time upload 2 hours
// ban database minimal time 20 minutes


//////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////

//Fast geo welcome when player connecting - 1 / When player connected - 0
$fast_geowelcome = 1;




// Prefix for chat commands, you can use ! @ # $ % ^ * ~ ,  or letter - q w r t o r y .
$ixz = "!";   

// KIck who want to try use admin commands!
$kicknotingrp = 1;

// ONE BANLIST database (db2.sqlite) FOR ALL SERVERS - if use one banlist database for one server set to $bannlist = "";
// If one database for all servers  (COPY FROM THAT FOLDER ..\ReCodMod\databases\db2.sqlite  FILE) ->  $bannlist = "/way to database folder/db2.sqlite"; 
$bannlist = ""; 

// ONE BANLIST cfg (cfg/bans.cfg.php) FOR ALL SERVERS - if use one banlist database for one server set to $cfg_bannlist = "";
// If one database for all servers  (COPY FROM THAT FOLDER ..\cfg/bans.cfg.php  FILE) ->  $cfg_bannlist = "/way to database folder/bans.cfg.php"; 
$cfg_bannlist = "";

// ONE BANLIST cfg (cfg/badwords.cfg.php) FOR ALL SERVERS - if use one badwordsd database for one server set to $cfg_badwords = "";
// If one database for all servers  (COPY FROM THAT FOLDER ..\cfg/badwords.cfg.php  FILE) ->  $cfg_badwords = "/way to database folder/badwords.cfg.php"; 
$cfg_badwords = "";

// ONE ADMINS database (db1.sqlite) FOR ALL SERVERS - if use one ADMINS database for one server set to $adminlists = "";
// If one database for all servers  (COPY FROM THAT FOLDER ..\ReCodMod\databases\db1.sqlite  FILE) ->  $adminlists = "/way to database folder/db1.sqlite"; 
$adminlists = ""; 

// ONE GROUPS cfg (_groups.php) FOR ALL SERVERS - if use one GROUPS cfg for one server set to $groups_cfg = "";
// If one database for all servers  (COPY FROM THAT FOLDER ../cfg/_groups.php  FILE) ->  $groups_cfg = "/way to database folder/_groups.php"; 
$groups_cfg = ""; 

// game server DOMAIN NAME //clan website
$website = "recod.ru"; 
 
// geo information ($geox = 1  - geo info with country and city)  ($geox = 0 - only country)
$geox = 1;

// Without autorized cd keys with guid = 0 need web server or website connection / with guid system add ($guids = 1;) // // Support only [cod1 p1.4, p1.5, cod uo all p, cod2 all p, cod4 all p] versions  - if use $guids = 1; change to  $code = 0;
$guids = 0;    

///1 protect players stats from name and guid fakers / 0 - OFF
$protect_stats = 0; //UP 20 PLAYERS IN SMALL MAP dm gametype SLOW RCM ADMINMOD LOGS READING 

/////////ANTIFAKE NAMES PROTECTING
//Using another players name - warning messages for players \\\\\ 1 - ON  , 0 - OFF
$fakealert = 0;
//Protect using another players nicknames \\\\\ 1 - ON  , 0 - OFF
$namefaker = 0;
//Protect using another players nicknames with kick from server \\\\\ 1 - ON  , 0 - OFF
$namefakerkick = 0;
           
// Kick blacklisted STOPFORUMSPAM.COM ip adress, known ip proxy users from database will be kicked!
$stopforumspam = 0;   
     
// Set to your time zone, for database and logs creating.
date_default_timezone_set( 'Europe/Kaliningrad' );  
       
// scheduler, enter $rules_schedule[hour in 24h format 0-23][minute 0-59] = 'command';
// you can also enter more commands to the same timestamp in this format: $rules_schedule[hour][minute][] = 'say Welcome!';
$rules_schedule[6][0] = 'say RCM local time is 6:00';
$rules_schedule[9][0] = 'exec a__config_day.cfg';

// $chat_protect = 0 - OFF protection
// $chat_protect = 1 - CHAT FLOOD PROTECTING,  , 
// $chat_protect = 2 - SWEARING, CRY, AND CHAT SPAM PROTECTING
// $chat_protect = 3 - Activate all
$chat_protect = 0;  
$flood_time = false; //1 second between messages
$flood_time_cmd = 2;    /// time between messages for flood protect
$flood_time_cmd2 = 3;   /// time between command messages for flood protect
//\\************************************************************************************//\\
$wflood = '4';    //\\ Flood warns limit, after this number limit - ban!
$wswear = '10';   //\\ Swearing warns limit, after this number limit - ban!
$wspams = '2';    //\\ Spam warns limit, after this number limit - ban!
$wdislk = '3';    //\\ Server dislike warns limit, after this number limit - ban!

$timewflood = '7200';    //\\ Flood time auto unban for players! - seconds
$timewswear = '10800';   //\\ Swearing  time auto unban for players! - seconds
$timewdisliker = '10800';   //\\ Disliker - cry  time auto unban for players! - seconds

$timewspams = '2';    //\\ Spam warns limit, after this number limit - ban!
$timewdislk = '3';    //\\ Server dislike warns limit, after this number limit - ban!
//\\************************************************************************************//\\
// Deadchat beta xD  Dead chat 1 - on, 0 - off/ Death chat / beta for cod 1.1
$deadchat = 0; 

// Player can be added in top list when player has 1000 frags. Better add 5000 kills limit for !top // Less of 1000 longer top updating)
$limm = "30";   

$v_time_gtx = 100;  //gametype vote time
$v_time_map = 100;  //map vote time
$v_time_ban = 100;  //ban vote time
$v_time_kick = 100; //kick vote time
/*############################################# Main configs #############################################*/ 


//********************************************************
/// Register from website sync. // if login from website use 1, no from website login = 0 - this line supporting only with special RCM web plugins
$registerx = '0';              
//********************************************************




///////////////////////////////////////   UPDATE 17,12,2016  ////////////////////////////////////////////////

//*********** BACKUPS ***********
 // CHAT ARCHIVATOR
 $cht_archive = '2'; // 2 mb , if chat log can be more 2mb, it's make archive in x_logs/archive/chat, and remove text from chat.html and chat.log
 
 // DATABASES auto Backup
 $cht_databases = '24'; // After where number 24 is 24 hours (ONLY HOURS SUPPORT - MIN: 1, MAX: 99940) , it's make backup in x_logs/backup/
 //*******************************


//********************** AUTO SCREENSHOTS ***************************
 $auto_getss = 0;       // 0 - OFF,  1 - for skill K/D players, 2 - for all
 $auto_getss_time = 5;   // Check players every 5 MINUTES
 $players_access_xget = 2; // time limit in minutes for players !xget command access - command spam protecting!
//*******************************************************************



//*********** GLOBAL GEO welcome TRANSLATE *********** 
 // 0 - off   
 // 1 - on  
 $translater = 1; 
//********************************************

?>
