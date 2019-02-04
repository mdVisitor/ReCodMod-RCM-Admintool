<?php
//MYSERVER NAME
// For stable working in VPS/VDS use your localhost adress 192.168.1.102 , 192.168.1.101...
$server_ip = '192.168.42.1';
//server port
$server_port = '28960';
//server rcon password
$server_rconpass = '123';
//game log file
$mplogfile = "C:\Games\Call of Duty 4 - Modern Warfare\mods\promodzzz\games_mp.log";  //game log file

											
//=======================  Discord REPORT AND SUPORT  =======================
//===========================================================================
/* Create new webhook in your Discord channel settings and copy&paste URL                */

$webhookurl = "https://discordapp.com/api/webhooks/.............";   // если пусто, типо так $webhookurl = ""; значит отключили


//======================= VKONTAKTE REPORT AND SUPORT =======================
//===========================================================================
/*
 Create new token in your vkontakte.com
 https://vkhost.github.io/ => VK API => 
Инструкция
    1.Выберите приложение
    2.Нажмите на него
    3.Затем нажмите "разрешить"
    4.Скопируйте часть адресной строки от access_token= до &expires_in                         */

$vk_token = "a82abcb1f135ac36c581aef71830049cd4afb00ce7897e13f1a613339a7dfa1e74e818eb7f0b2f2c0c27e"; //наш токен
// если пусто, типо так $vk_token = ""; значит отключили
$vk_owners = array("353126441");  // Можно посылать другим:  array("35312467846441","3465657647","567856869","346356735735","3737373575373");


?>
