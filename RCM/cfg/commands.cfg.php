<?php 

/// ALL COMMANDS!
$commands = array($mistake, 
'report', 'support', 'reg', 'on', 'login', 'logout', 'num', 'rules',
'cmd', 'list', 'all', 'nextmap','lastban', 'reset me', 'xget',
 'ip', 'time', 'info', 'sys', 'geo', 'guid', 'status',  
'top', 'worst', 'n', 'status',  'kills', 'sk', 'stats', 
'rank', 'toprank', 'nade', 'grenade', 'heads', 'mellee', 
'suicides','suicid', 'bash', 'headshots', 'admin');

///MAIN CMD AND FUN + HELP COMMANDS
$funcommands = array('cmd', 'fun', 
'chea', 'sps', 'haker', 'wallhack', 'tits', 'hello', 'fps', 'fov', 'ping',
'hack', 'aimbot', 'ty', 'thx', 'gg', 'hi', 'hi server', 'bb', 'xxx', 'xl',
'ch', 'vdk', 'dr', 'govn', 'gavn', 'bl', 'gl', 'stfu', 'afk', 'ny', 'mc', '#fp', 'admin',
'gj', 'shit', 'wp', 'n1');

/// Secret for all players screenshot making in cod1 1.2 and up / cod2 / cod4 / cod4x / cod5
$getsssc = 'ppp';

/// cmd  - for each group admin commands with server control separately!	 
$admin_commands = array(';admingroup;',
 'rc', 'ban', 'kick', 'tban', 'unban', 'rlist', 'ftp', 'kick', 'kickall', 'restart', 'map', 'maplist', 'gt', 'range', 'banlist', 'ulist', 'list', 
 'getss', $getsssc, 'delete', 'reload', 'refresh', 'update', 'bw');
 
$moderator_commands = array(';moderatorgroup;', 
  'kick', 'ban', 'banlist', 'ulist', 'list', 'getss', 'bw');
  
$vip_commands = array( ';vipgroup;', 
  'banlist', 'ulist', 'kick', 'getss');
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
////////do not change below!
$admcmdlist = implode(" ".$ixz,$admin_commands);
$modrcmdlist = implode(" ".$ixz,$moderator_commands);
$vipcmdlist = implode(" ".$ixz,$vip_commands);
$cmdx0 = $ixz.'b ';  //vote ban    false; //
$cmdyes = '+';  //yes vote    false; //
$cmdyes_gt = '=';   //no vote     false; //
$cmdnoo = '-';   //no vote     false; //
$vk = $ixz.'k ';  //vote kick    false; // 
$mapvote = $ixz.'xmap ';  //vote map    false; // 
$gtvote = $ixz.'xgt ';    //vote map    false; // 
?>
